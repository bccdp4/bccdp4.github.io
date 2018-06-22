<?php
	if(isset($_POST["submit"])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		$from = $email;
		$to = 'bryan.corcoro@gmail.com';
		$subject = 'Message From: ' . $name;
		
		$body = "From: $name\n E-mail: $email\n Message:\n $message";
		
		// Check if name is entered
		if (!$_POST['name') {
			$errName = 'Please enter your name';
		}
		// Validate proper email address
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		// Check if message has been entered
		if(!$_POST['message']) {
			$errMessage = 'Message field cannot be empty'
		}
		
		
		// Send email
		if(!$errName && !errEmail && !errMessage) {
			if(mail ($to, $subject, $body, $from){
				$result = '<div class="alert alert-success"> Thank You1 I will be in thouch </div>';
			}
			else {
				$result = '<div class="alert alert-danger"> Sorry there was an error sending your email. Please try again later. </div>';
			}
		}
	}
?>