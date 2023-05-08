<?php 

include ("connect.php");

?>


<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="about.css">

	<?php 

	require_once ("header.php");


	?>

</head>
<body>


	<section class="about">
		<div class="main">
			<img src="about.jpg">
			<div class="all-text">
				<h4>About Us</h4>
				<h1>A Garden Of Groove & Only Groove</h1>
				<p>I am looking to create a data-based driven website related to the concept of House Music, in retrospect, anything that has to do with the genre which includes groovy, disco, afro to retro-vinyl music. My goal is to create a space that embodies both sound and the ability to speak to my audience through music.
				What I find interesting about working on a music-based website is the fact that I’ll be able to both create and control the content; it makes you understand who you are as a musician or as a music lover. It is like creating one’s own brand except it’s through a website</p>



				<div class="btn">
					<a href="index.php"><button type="button">Explore</button></a>
					<a href="contactus.php"><button type="button" class="btn2">Contact Us</button></a>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
