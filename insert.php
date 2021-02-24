<?php
require_once("config.php");

$username= $_POST['username'];

$firstname= $_POST['firstname'];

$surname= $_POST['surname'];

$email= $_POST['email'];

$phone= $_POST['phone'];

$birthday= $_POST['birthday'];

$gender= $_POST['gender'];

$password= $_POST['password'];

$token= bin2hex(random_bytes(15));

$vkey= md5(time().$phone);

$avatar= $_POST['avatar'];




$matchquery = "SELECT username FROM register WHERE username='$username'";

$runmatchquery=  mysqli_query($conn, $matchquery);

$checkcount = mysqli_num_rows($runmatchquery);

if ($runmatchquery== true) {
	if ($checkcount ===1) {
	 header("location: reg-section.php?unique");
	}

	else {

		$checkpasslen = strlen($password);
		if ((($checkpasslen)>5)==false) {
			header("location: reg-section.php?pass_error=Password is too short!");
		}

	else {
		$insertSignupData= "INSERT into register(username, firstname, surname, email, phone, birthday, gender, password, avatar, vkey) VALUES('$username', '$firstname', '$surname', '$email', '$phone', '$birthday', '$gender', '$password', '$avatar','$vkey')";



		$runquery = mysqli_query($conn, $insertSignupData);

		if($runquery == true)
		{

			$to= $email;
			$subject= "Email Verification";
			$message= "<a href='http://localhost/website_project/verify.php?vkey=$vkey'>Register Account</a>";
			$headers= "From: chayachobilimited@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UFT-8" . "\r\n";

			mail($to,$subject,$message,$headers);

			header("location:reg-section.php?done_signup=A verification email has been sent!");

		}
	}

	}
}

?>
