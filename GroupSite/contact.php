<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
     <link href="bootstrap.min.css" rel="stylesheet">
     <link href='https://www.google.com/maps/embed/v1/MODE?key=API_KEY&parameters' rel='stylesheet' type='text/css'>
     <link href="style.css" rel="stylesheet">
</head>
<body>
<?php
  $fName = basename(__FILE__);
?>
	<?php 
	include("header.php");
	?>
	<div class="contact" style="background-color: #fff">
		<div class="col-xs-6" id="contact_text">
			
			<h2>Hours of Operation:</h2>
			<p><b>Monday-Thursday:</b> 11:00am - 10:00pm<br />
			<b>Friday & Saturday:</b> 11:00am - 10:30pm<br />
			<b>Sunday:</b> 12:00pm - 9:00 pm<br /></p>
			<h4>Special Lunch Hours</h4>
			<p><b>Monday-Saturday:</b> 11:00am - 2:30pm</p>

			<h2>Contact</h2>
			<p>1321 South University<br/>
				Ann Arbor, MI 48104<br/><br/>

				<b>Telephone:</b> (734) 913-0057<br/>
				<b>Fax:</b> (734) 913-0740<br/>
			</p>
			<p>Here at <b>Sadako Japanese Restaurant</b>, we work hard to ensure that your food is served both hot and fresh (or cold and fresh, if it is sushi or sashimi). It is also our full intention to provide you with the high quality of service that you deserve. Our patron’s enjoyment and security are very important to us. If you have any questions, feel free to contact us for more information.</p>

		</div>
		<div class="col-xs-4">
			<iframe 
				width="575" height="425" 
				frameborder="0" style="border:0; padding: 1em; text-align: right"
				src="https://www.google.com/maps/embed/v1/place?q=Sadako%20Japanese%20Restaurant%2C%20South%20University%20Avenue%2C%20Ann%20Arbor%2C%20MI%2C%20United%20States&key=AIzaSyABww2fGcDY7-xkSsZ-1GqeTSuMFc_Rtvc">
			</iframe>
		</div>
	</div>
	<div id="clear_footercontact"></div>
	<?php
		include("footer.php");
	?>

</body>
</html>