<?php
//this is the test for the captcah

session_start();
if(!isset($_POST['submit'])){
echo '<form action = "captcha.php" method ="post" >
  <table>
    <tr><td>lets see if you are not a robot</td></tr>
    <tr><td><img src="captchaimg.php" alt = "no captcha for you" /></td></tr>
    <tr><td><input type="text" name="captcha" placeholder = "enter the captcha here"></td></tr>
    <tr><td><input type="submit" name="submit" value = "captcha"></td></tr>
  </table>
</form>';
}else{
	$captcha = $_POST['captcha'];
	if($captcha == $_SESSION['text']){
		echo "captcha matched";
	}else{
		echo "captcha did not matched";
	}
}
?>