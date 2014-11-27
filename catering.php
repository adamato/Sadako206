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
<?php
  $fName = basename(__FILE__);
?>
<body>
	<?php include("header.php");
	?>
	<div class="catering">
		<div class="col-xs-6">
	<h1>Catering</h1>
	<p>A. Regular(2-3 People): 20 pieces of sushi with 4 kinds of rolls</p>
	<p>B. Deluxe(3-4 People): 30 pieces of sushi with 8 kinds of rolls</p>
	<p>C. Special(4-6 People): 40 pieces of sushi with 8 kinds of rolls (1 special roll)</p>
	<p>D. Supreme(6-8 People): 60 pieces of sushi with 10 kinds of rolls (2 special rolls)</p>
	</div>
		<div class="col-xs-6">
			<img src="catering.png" alt="Picture of sushi" id="catering">
		</div>
	</div>

	<?php
		include("footer.php");
	?>
</body>
</html>