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
		<div class="cater_pics">
			<img id="cater" alt="Picture of catered sushi" src="catering.png">
			<img id="other" alt="Another picture of catered sushi" src="cater.jpg">
		</div>
		<div class="catering">
			<h1>Catering</h1>
			<p><b>A. Regular(2-3 People):</b> 20 pieces of sushi with 4 kinds of rolls</p>
			<p><b>B. Deluxe(3-4 People):</b> 30 pieces of sushi with 8 kinds of rolls</p>
			<p><b>C. Special(4-6 People):</b> 40 pieces of sushi with 8 kinds of rolls (1 special roll)</p>
			<p><b>D. Supreme(6-8 People):</b> 60 pieces of sushi with 10 kinds of rolls (2 special rolls)</p>
			<br><h4>*If you have further questions regarding catering, feel free to contact us!</h4>
		</div>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>