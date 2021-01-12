<?php 
	if (isset($_POST['sendMessage'])) {
		$name = $_POST['name'];
		$company = $_POST['company'];
		$email = $_POST['email'];
    $remarks = $_POST['remarks'];
    $message = "Name: ".$name."<br /> Company: ".$company."<br /> Company: ".$remarks."";
		$subject = "Get In Touch From Tesuqa.com";
		$toEmail = "support@tesuqa.com";
		$mailHeaders = "From: " . $name . "<". $email .">\r\n";
		if(mail($toEmail, $subject, $message, $mailHeaders)) {
			header('Location: ./');
			exit();
		}
	}
	else {
		header('Location: ./');
	}
?>