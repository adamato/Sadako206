<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sadako</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php 
	$fName = basename(__FILE__);
	include("header.php");
	?>
	<div class="col-xs-6">
		<h1> SADAKO JAPANESE RESTAURANT</h1>
		<h3>Ann Arbor's Fresh Choice for Fine Japanese Cuisine</h3>
		<p>Are you looking for an interesting, classy atmosphere to take your family for lunch or dinner? Is your appetite looking for something different from that generic American restaurant down the street, with hamburgers that you’re tired of having? If any of this sounds familiar, then let us welcome you to Sadako Japanese Restaurant, where we offer a mouthwatering variety of traditional Japanese cuisine that you can definitely appreciate.</p>
		<p>Feel free to explore our website to learn more about <b>Sadako Japanese Restaurant</b> and what we have to offer!</p>
	</div>
	<div class="col-xs-6">
		<img src="store.jpg" alt="Sadako Store Front" id="store">
	</div>
	

	<?php
		include("footer.php");
	?>
</body>
</html>