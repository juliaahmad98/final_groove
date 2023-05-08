<?php 

include ("header.php");


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>

</head>

	<?php 

if(!empty($_POST)) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);

    include("connect.php");
    mysqli_query($conn,"insert into contact(name,email,description,title) values('$name','$mailFrom','$message','$subject')");


  	echo "<script>alert('Mail Sent');</script>";

}
?>

	<link rel="stylesheet" href="contactus.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
<body>



	<div class="container">
		<h1>Get in Touch</h1>
			
				<p>We're here to help and answer any question you might have. Want to get in touch? We'd love to hear from you.</p><br><br>
			
	<div class="contact-box">
		<div class="contact-left">
			<h3>Send a Message</h3>

			<form class="contact-form" action="contactus.php" method="post">
				<div class="input-row">
					<div class="input-group">
						<label>Full Name</label>
						<input type="text" name="name" required placeholder="Full Name">
					</div>
					<div class="input-group">
						<label>E-Mail Address</label>
						<input type="email" name="mail" required placeholder="Your E-Mail">

				</div>

			</div>
			<div class="input-row">
				<div class="input-group">
					<label>Subject</label>
					<input type="text" name="subject" required placeholder="Subject">

				</div>
			</div>

				<label>Message</label>
				<textarea rows="5" name="message" placeholder="Your Message"></textarea>

				<button type="submit">Send</button>

			
			</form>

	</div>
	<div class="contact-right">
		<h3>Reach Us</h3>

		<table>
			<tr>
				<td>Email</td>
				<td>groovetheory@info.com</td>
			</tr>

			<tr>
				<td>Phone</td>
				<td>+1 442 442 0442</td>
			</tr>

			<tr>
				<td>Address</td>
				<td>Welcome to New York<br>
					It's Been Waiting For You<br>
					New York, New York</td>
			</tr>

		</table>
	</div>
</div>
</div>
</body>
</html>