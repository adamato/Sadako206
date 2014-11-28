<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu</title>
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
	<div class="menu">
		<div class="col-xs-6" id="roll_maki">
			<h2>Rolls &#40;Maki&#41;</h2>
				<ol class="roll-list">
					<li><b>AVOCADO</b>: fresh avocado <i><b> $2.49 &#40;hand roll $1.49&#41;</b></i></li>
					<li><b>CUCUMBER</b>: fresh cucumber <i><b> $2.49 &#40;hand roll $1.49&#41;</b></i></li>
					<li><b>ASPARAGUS</b>: fresh asparagus <i><b> $2.99 &#40;hand roll $1.99&#41;</b></i></li>
					<li><b>CUCUMBER &amp; AVOCADO</b>: fresh cucumber and avocado <i><b> $2.99 &#40;hand roll $1.99&#41;</b></i></li>
					<li><b>GREEN GRASS</b>: seaweed over avocado, cucumber, asparagus <i><b> $4.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>VEGETABLE</b>: avocado, cucumber, asparagus, kampyo <i><b> $3.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>*TUNA</b>: fresh tuna <i><b> $3.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>*SALMON</b>: fresh salmon <i><b> $3.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>*YELLOWTAIL</b>: fresh yellow tail <i><b> $4.99 &#40;hand roll $3.49&#41;</b></i></li>
					<li><b>CALIFORNIA</b>: avocado, cucumber, crab meat, masago <i><b> $3.49 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>M. CALIFORNIA</b>: crab salad, avocado <i><b> $4.49 &#40;hand roll $3.29&#41;</b></i></li>
					<li><b>SHRIMP CALIFORNIA</b>: shrimp, avocado, cucumber, masago <i><b> $4.99 &#40;hand roll $3.49&#41;</b></i></li>
					<li><b>EEL &#40;CUCUMBER or AVOCADO&#41;</b>: cooked freshwater eel <i><b> $4.99 &#40;hand roll $3.49&#41;</b></i></li>
					<li><b>SALMON SKIN</b>: broiled salmon skin <i><b> $3.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>TEMPURA SHRIMP</b>: tempura shrimp, cucumber, crab meat, asparagus <i><b> $6.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*HOUSE</b>: fresh tuna, salmon, asparagus, avocado, 1/2 &amp; 1/2 <i><b> $7.49 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*U of M</b>: fresh salmon over crab, cucumber, avocado <i><b> $7.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*PASSION &#40;SPICY&#41;</b>: fresh tuna over cucumber, crabmeat, spicy sauce <i><b> $7.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*GREAT LAKE</b>: tuna, masago, mayo, cucumber, crabmeat, lettuce <i><b> $8.99 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>PHILADELPHIA</b>: smoked salmon, cream chees, cucumber, asparagus <i><b> $7.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*BAMBOO &#40;SPICY&#41;</b>: avocado over tuna, cucumber, spicy sauce <i><b> $8.99</b></i></li>
					<li><b>*RAINBOW</b>: variety of fresh fish over california roll <i><b> $9.99</b></i></li>
					<li><b>MEXICAN &#40;SPICY&#41;</b>: tempura shrimp, avocado, cucumber, hot pepper, crab, spicy sauce <i><b> $8.99 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>COBRA &#40;SPICY&#41;</b>: tempura shrimp, eel, cucumber, crab salad, spicy sauce <i><b> $8.99 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>SPIDER</b>: soft shell crab, cucumber, avocado, crab meat, special sauce <i><b> $8.99 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>DRAGON</b>: cooked eel, avocado over tempura shrimp, cucumber <i><b> $9.99</b></i></li>
					<li><b>FUTO MAKI</b>: kampyo, osinko, crabmeat, damago, avocado, cucumber <i><b> $9.99</b></i></li>
					<li><b>*SAMURAI &#40;SPICY&#41;</b>: spicy sauce over salmon, tempura shrimp, avocado, cucumber <i><b> $10.99</b></i></li>
					<li><b>*FIRE BALL &#40;SPICY&#41;</b>: crabmeat, spicy sauce over tempura shrimp, avocado, cucumber <i><b> $10.99</b></i></li>
					<li><b>ANN ARBOR &#40;SPICY&#41;</b>: tempura shrimp, asparagus, cucumber, crab salad, osinko, spicy sauce <i><b> $9.99</b></i></li>
					<li><b>*DREAM</b>: shrimp, yellowtail, avocado, crab salad, wrapped in cucumber <i><b> $9.99</b></i></li>
					<li><b>SUNNY</b>: salmon, cream cheese, avocado, deep fried <i><b> $6.49</b></i></li>
					<li><b>*SPICY TUNA</b>: fresh tuna, avocado, spicy sauce <i><b> $4.49 &#40;hand roll $3.29&#41;</b></i></li>
					<li><b>*SPICY SALMON</b>: fresh salmon, avocado, spicy sauce <i><b> $4.49 &#40;hand roll $3.29&#41;</b></i></li>
					<li><b>SPICY CALIFORNIA</b>: avocado, cucumber, crabmeat, masago <i><b> $3.99 &#40;hand roll $3.29&#41;</b></i></li>
					<li><b>SADAKO ROLL</b>: crunch, special sauce over avocado, crab salad<i><b> $5.49 &#40;hand roll $3.79&#41;</b></i></li>
					<li><b>CHICKEN TERIYAKI ROLL</b>: broiled chicken, teriyaki sauce <i><b> $8.99</b></i></li>
					<li><b>*AC ROLL &#40;SPICY&#41;</b>: spicy sauce over tempura shrimp, tuna salad, crab salad, avocado, cucumber, crunch <i><b> $10.99</b></i></li>
					<li><b>JOSH ROLL</b>: crunch over shrimp, mayo, masago, crabmeat <i><b> $7.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>*SOUTH U ROLL &#40;SPICY&#41;</b>: tuna salad over cucumber, avocado, crabmeat <i><b> $9.99 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>*CRANE ROLL</b>: softshell crab, avocado, crab salad, cucumber, osinko <i><b> $9.99</b></i></li>
					<li><b>*SNAKE ROLL &#40;SPICY&#41;</b>: cooked eel, spicy sauce over tuna, crab salad, cucumber <i><b> $11.99</b></i></li>
					<li><b>*SPICY SCALLOP ROLL</b>: fresh scallop, masago, scallion, spicy sauce <i><b> $8.49 &#40;hand roll $4.29&#41;</b></i></li>
					<li><b>*BIG HOUSE ROLL &#40;SPICY&#41;</b>: crunch, spicy sauce over tuna salad, avocado, cucumber, crab salad <i><b> $8.99</b></i></li>
					<li><b>*JONNY BOY &#40;SPICY&#41;</b>: crunch, spicy sauce over salmon, whitefish, crab salad, avocado <i><b> $8.99</b></i></li>
					<li><b>*FIRE DRAGON &#40;SPICY&#41;</b>: crab meat, eel, spicy sauce over tempura shrimp, avocado, cucumber, crunch <i><b> $10.99</b></i></li>
					<li><b>SADAKO TOFU ROLL</b>: deep fried tofu with cucumber, scallion, vegetable sauce <i><b> $4.99</b></i></li>
					<li><b>*PARADISE &#40;SPICY&#41;</b>: spicy salmon salad over avocado, crab salad, crunch <i><b> $9.99</b></i></li>
					<li><b>*TEMPTATION &#40;SPICY&#41;</b>: tuna salad, scallion over avocado, cucumber, crab salad, crunch <i><b> $9.99</b></i></li>
					<li><b>*CANDY CANE</b>: white tuna, tuna over avocado, cucumber, crabmeat, masago<i><b> $9.99</b></i></li>
					<li><b>*SADAKO LOBSTER</b>: spicy sauce over lobster salad, avocado, cucumber, crunch <i><b> $7.99 &#40;hand roll $3.99&#41;</b></i></li>
					<li><b>SWEET POTATO ROLL</b>: deep fried sweet potato with special sauce <i><b> $4.99 &#40;hand roll $2.99&#41;</b></i></li>
					<li><b>*FIRE STORM</b>: salmon, white tuna, spicy sauce over tempura shrimp, cucumber, avocado, crunch <i><b> $10.99</b></i></li>
					<li><b>*TUSAL ROLL</b>: salmon, white tuna over cucumber, avocado, crab salad, spicy sauce <i><b> $9.99</b></i></li>
					<li><b>SALMON TERIYAKI ROLL</b>: grilled fresh salmon with teriyaki sauce <i><b> $8.99</b></i></li>
				</ol>
			</div>
		</div>

		<div class="col-xs-6" id="other_sushi">
			<h2>A La Carte &#40;Nigiri&#41;</h2>
				<ul class="nigiri-list">
					<li><b>*TUNA &#40;maguro&#41;<i> $1.99</i></b></li>
					<li><b>*FATTY TUNA &#40;toro&#41;<i> $3.49</i></b></li>
					<li><b>*SALMON &#40;sake&#41;<i> $1.99</i></b></li>
					<li><b>*YELLOWTAIL &#40;hamachi&#41;<i> $2.49</i></b></li>
					<li><b>SHRIMP &#40;ebi&#41;<i> $1.99</i></b></li>
					<li><b>*SWEET SHRIMP &#40;amaebi&#41;<i> $3.99</i></b></li>
					<li><b>*SQUID &#40;ika&#41;<i> $1.99</i></b></li>
					<li><b>*MACKEREL &#40;saba&#41;<i> $2.49</i></b></li>
					<li><b>*RED SNAPPER &#40;izumidai&#41;<i> $1.99</i></b></li>
					<li><b>*SCALLOP &#40;hotategai&#41;<i> $2.99</i></b></li>
					<li><b>*FLUKE &#40;hirame&#41;<i> $2.29</i></b></li>
					<li><b>*WHITE TUNA &#40;shiro maguro&#41;<i> $2.49</i></b></li>
					<li><b>FRESHWATER EEL &#40;unagi&#41;<i> $2.79</i></b></li>
					<li><b>CRAB MEAT &#40;kani&#41;<i> $1.99</i></b></li>
					<li><b>OCTOPUS &#40;tako&#41;<i> $2.29</i></b></li>
					<li><b>*SEA URCHIN &#40;uni&#41;<i> $13.99</i></b></li>
					<li><b>SMOKEN SALMON &#40;sake kunsei&#41;<i> $2.49</i></b></li>
					<li><b>EGG &#40;tamago&#41;<i> $1.79</i></b></li>
					<li><b>TOFU SKIN &#40;inari&#41;<i> $1.79</i></b></li>
					<li><b>*SMELT ROE &#40;masago&#41;<i> $2.79</i></b></li>
					<li><b>*FLYING FISH ROE &#40;tobiko&#41;<i> $2.99</i></b></li>
					<li><b>*SALMON ROE &#40;ikura&#41;<i> $3.49</i></b></li>
					<li><b>SEA BASS &#40;suzuki&#41;<i> $2.29</i></b></li>
				</ul>
			<h2>Sushi Combinations</h2>
				<ul class="sushi-combo-list">
					<li><b>*SUSHI REG&#40;A&#41;</b>: 7 pieces of sushi with Tuna, Salmon, California Roll<i><b> $10.99</b></i></li>
					<li><b>*SUSHI REG&#40;B&#41;</b>: 7 pieces of sushi with Spicy Tuna, Salmon, California Roll<i><b> $11.99</b></i></li>
					<li><b>*SUSHI DELUXE&#40;A&#41;</b>: 10 pieces of sushi with Tuna, Salmon, California Roll<i><b> $15.99</b></i></li>
					<li><b>*SUSHI DELUXE&#40;B&#41;</b>: 10 pieces of sushi with Spicy Tuna, Salmon, California Roll<i><b> $16.99</b></i></li>
				</ul>
			<h2>Sashimi Combinations</h2>
				<ul class="sashimi-combo-list">
					<li><b>*SASHIMI REG&#40;A&#41;</b>: 11 pieces with bowl of rice<i><b> $13.99</b></i></li>
					<li><b>*SASHIMI REG&#40;B&#41;</b>: 18 pieces with bowl of rice<i><b> $20.99</b></i></li>
					<li><b>*SASHIMI DELUXE</b>: 30 pieces with bowl of rice<i><b> $34.99</b></i></li>
				</ul>
			<h2>Special Sushi Combination</h2>
				<ul class="spec-sushi-combo-list">
					<li><b>*SUSHI TOGETHER</b>: 14 pieces of sushi with 2 kinds of rolls<i><b> $20.99</b></i></li>
					<li><b>*SUSHI FAMILY</b>: 20 pieces of sushi with 4 kinds of rolls<i><b> $49.99</b></i></li>
				</ul>
			<h2>Special Sushi &amp; Sashimi Combination</h2>
				<ul class="spec-sushi-sashimi">
					<li><b>*SU &amp; SA TOGETHER</b>: 5 pieces of sushi with 7 pieces of sashimi<i><b> $14.99</b></i></li>
					<li><b>*SU &amp; SA DELUXE&#40;A&#41;</b>: 7 pieces of sushi with 11 pieces of sashimi<i><b> $19.99</b></i></li>
					<li><b>*SU &amp; SA DELUXE&#40;B&#41;</b>: 10 pieces of sushi with 18 pieces of sashimi<i><b> $34.99</b></i></li>
				</ul>
			<h2>Special Party Tray</h2>
				<ul class="party-list">
					<li><b>*REGULAR&#40;A&#41; &#40;2~3 people&#41;</b>: 20 pieces of sushi with 4 kinds of rolls<i><b> $49.99</b></i></li>
					<li><b>*DELUXE&#40;B&#41; &#40;3~4 people&#41;</b>: 30 pieces of sushi with 6 kinds of rolls<i><b> $64.99</b></i></li>
					<li><b>*SPECIAL&#40;C&#41; &#40;4~6 people&#41;</b>: 40 pieces of sushi with 8 kinds of rolls<i><b> $79.99</b></i></li>
					<li><b>*SUPREME&#40;D&#41; &#40;8~10 people&#41;</b>: 50 pieces of sushi with 10 kinds of rolls<i><b> $49.99</b></i></li>
				</ul>
			<h2>Drinks</h2>
				<ul class="drinks-list">
					<li><b>Coke, Diet, Sprite, Orange, Lemonade <i>$1.50</i></b></li>
					<li><b>Spring Water &#40;Bottled&#41;<i>$1.20</i></b></li>
				</ul>
			<h3>*Served raw or undercooked. Consuming raw or undercooked meat, poultry, seafood, shellfish, or egg may increase your risk of foodborne illness.</h3>
	<?php
		include("footer.php");
	?>

</body>
</html>					
