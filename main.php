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

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bryan Corcoro</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">
		
	</head>

		<body>
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="https://bccdp4.github.io"> <img src="img/toplogocontact.png" id="toplogo"> </a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="https://bccdp4.github.io">Home</a>
							</li>
							<li class="active">
								<a href="Resume-Bryan-Corcoro-2018.pdf">About</a>
							</li>
							<li class="active">
								<a href="gallery.html">Gallery</a>
							</li>
							<li class="active">
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<br><br><br>
			<div class="container">
				<div class="row">
				  <div class="col-md-6 col-md-offset-3">
					<div class="well well-sm">
					  <form class="form-horizontal" action="" method="post">
					  <fieldset>
						<legend class="text-center">Contact Me</legend>
				
						<!-- Name input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="name">Name</label>
						  <div class="col-md-9">
							<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
							<?php echo '<p class="text-danger">' . $errName . '</p>';?>
						  </div>
						</div>
				
						<!-- Email input-->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="email">Your E-mail</label>
						  <div class="col-md-9">
							<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
							<?php echo '<p class="text-danger">' . $errEmail . '</p>';?>
						  </div>
						</div>
				
						<!-- Message body -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="message">Your message</label>
						  <div class="col-md-9">
							<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
							<?php echo '<p class="text-danger">' . $errMessage . '</p>';?>
						  </div>
						</div>
				
						<!-- Form actions -->
						<div class="form-group">
						  <div class="col-md-12 text-right">
							<button type="submit" class="btn btn-primary btn-lg"id="submit" name="submit">Submit</button>
						  </div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result;?>
							</div>
						</div>
					  </fieldset>
					  </form>
					</div>
				  </div>
				</div>
			</div>			
			</footer>
		</body>
</html>