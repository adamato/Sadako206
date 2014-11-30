<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catering</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
     <link href="bootstrap.min.css" rel="stylesheet">
     <link href="style.css" rel="stylesheet">
</head>
<body>
	<?php 
	$fName = basename(__FILE__);
	include("header.php");
	?>
	<div>
		<div class="catering">
			<h1>Catering</h1>
			<p>A. Regular(2-3 People): 20 pieces of sushi with 4 kinds of rolls</p>
			<p>B. Deluxe(3-4 People): 30 pieces of sushi with 8 kinds of rolls</p>
			<p>C. Special(4-6 People): 40 pieces of sushi with 8 kinds of rolls (1 special roll)</p>
			<p>D. Supreme(6-8 People): 60 pieces of sushi with 10 kinds of rolls (2 special rolls)</p>
		</div>
		<img id="cater" alt="Picture of catered sushi" src="catering.png">
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>