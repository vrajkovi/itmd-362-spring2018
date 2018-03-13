<?php

//Make short Variable names
$firstName = $_REQUEST['first_name_field'];
$lastName = $_REQUEST['last_name_field'];
$phone = $_REQUEST['phone_field'];
$email = $_REQUEST['email_field'];
$hidden = $_REQUEST['hidden_field'];
$comments = $_REQUEST['comments_field'];
$gender = $_REQUEST['gender_field'];
$available = $_REQUEST['available_field'];
$age = $_REQUEST['age_field'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Submission Complete!</title>
		<style>
		.box {
			border: 1px solid #000000;
			background-color: #4c4c4c;
			margin: 20px 20px;
			padding: 5px 20px;
		}
		</style>
	    <link rel="stylesheet" media="screen" href="screen.css" />	
</head>
<body>
	<div style="text-align:center;">
		<h2>Thank you for your submission <?php echo htmlentities($firstName) ?>!</h2>
		<h3>Review the information below. If any information is incorrect, please go back and resubmit the form again.</h3>
	</div>
	<br><br>

	
	<div class="box">	
		<p><strong>First Name:</strong> <?php echo htmlentities($firstName) ?></p>
		<p><strong>Last Name:</strong> <?php echo htmlentities($lastName) ?></p>
		<p><strong>Phone Number:</strong> <?php echo htmlentities($phone) ?></p>
		<p><strong>Email Address:</strong> <?php echo htmlentities($email) ?></p>
		<p><strong>Gender:</strong> <?php echo htmlentities($gender) ?></p>
		<p><strong>Age:</strong> <?php echo htmlentities($age) ?></p>
	</div>
	
	<div class="box">		
		<h3>Comments:</h3>
		<p><?php echo nl2br(htmlentities($comments)) ?></p>
		</div>
	<div class="box">

		<p><strong>Form submitted by:</strong> <?php echo htmlentities($firstName) ?> <?php echo htmlentities($lastName) ?></p>
		
	</div>
	
</body>
</html>