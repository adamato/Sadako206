<!DOCTYPE html>
<html lang="en">
<head>
	<!--Meta Data-->
	<title>Sadako Order Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	<meta name="author" content="co-authored by Angela Damato, Rebecca Lawson, and Colleen Miller">
	<!--Stylesheets-->
	<link href="css/bootstrap-formhelpers.css" rel="stylesheet">	
	<link href="css/bootstrap-formhelpers.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-form-helpers.min.css" rel="stylesheet" media="screen">	
	<link rel="stylesheet" type="text/css" href="otherstyle.css">
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- JQuery  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script	src="js/bootstrap.min.js"></script>
	<script	src="js/bootstrap-formhelpers.js"></script>
	<script>
		function closeMe()
		{
   			x=document.getElementById("billing"); // Find the element
   			x.style.display="none";

		}
		function openMe()
		{
   			x=document.getElementById("billing"); // Find the element
  		 	x.style.display="block";
		}
		function calculate()
		{
			subtotal = 0.00;
			subtotal += (document.getElementById("Tuna").value * 1.99);
			subtotal += (document.getElementById("FattyTuna").value * 3.49);
			subtotal += (document.getElementById("Salmon").value * 1.99);
			subtotal += (document.getElementById("Yellowtail").value * 2.49);

			subtotal += (document.getElementById("Shrimp").value * 1.99);
			subtotal += (document.getElementById("SweetShrimp").value * 3.99);
			subtotal += (document.getElementById("Squid").value * 1.99);
			subtotal += (document.getElementById("Mackerel").value * 2.49);

			subtotal += (document.getElementById("RedSnapper").value * 1.99);
			subtotal += (document.getElementById("Scallop").value * 2.99);
			subtotal += (document.getElementById("Fluke").value * 2.29);
			subtotal += (document.getElementById("WhiteTuna").value * 2.49);

			subtotal += (document.getElementById("Octopus").value * 2.29);
			subtotal += (document.getElementById("Eel").value * 2.79);
			subtotal += (document.getElementById("CrabMeat").value * 1.99);
			subtotal += (document.getElementById("Urchin").value * 3.99);

			subtotal += (document.getElementById("SmokedSalmon").value * 2.49);
			subtotal += (document.getElementById("Egg").value * 1.79);
			subtotal += (document.getElementById("TofuSkin").value * 1.79);
			subtotal += (document.getElementById("SmeltRoe").value * 2.79);

			subtotal += (document.getElementById("SalmonRoe").value * 3.49);
			subtotal += (document.getElementById("SeaBass").value * 2.29);

			subtotal = subtotal.toFixed(2);
			document.getElementById("bSubTotal").innerText = subtotal;
			var tax = subtotal * 0.06;
			tax = tax.toFixed(2);
			document.getElementById("bTax").innerText = tax;
			total = parseFloat(tax) + parseFloat(subtotal);

			if (document.getElementById('Delivery').checked && subtotal > 0.00) {
				total += 3.00;
				x=document.getElementById("deliveryFee");
  		 		x.style.display="block";	
			}
			else if (document.getElementById('Delivery').checked && subtotal == 0.00) {
				x=document.getElementById("deliveryFee");
  		 		x.style.display="none";	
			}
			document.getElementById("bTotal").innerText = total.toFixed(2);
		}

		function closeDelivery() {
  		 	x=document.getElementById("deliveryFee");
  		 	x.style.display="none";		
  		 	y=document.getElementById("deliveryInfo");
  		 	y.style.display="none";  		 			

			if (subtotal > 0) {
  		 		total -= 3.00;
  		 		document.getElementById("bTotal").innerText = total.toFixed(2);
  		 	}
		}

		function openDelivery() 
		{
  		 	y=document.getElementById("deliveryInfo");
  		 	y.style.display="block";			
			x=document.getElementById("deliveryInfo");
  		 	x.style.display="block";	
			if (subtotal > 0) {
  		 		x=document.getElementById("deliveryFee");
  		 		x.style.display="block";
  		 		total += 3.00;
  		 		document.getElementById("bTotal").innerText = total.toFixed(2);
  		 	}	
  		 }

  		 function resetMe()
  		 {
  		 	subtotal = 0;
  		 	total = 0;
  		 	document.getElementById("bSubTotal").innerText = "0.00";
  		 	document.getElementById("bTax").innerText = "0.00";
  		 	document.getElementById("bTotal").innerText = "0.00";
  		 	x=document.getElementById("deliveryFee");
  		 	x.style.display="none";
  		 	x=document.getElementById("billing");
  		 	x.style.display="none";
  		 	x=document.getElementById("deliveryInfo");
  		 	x.style.display="none";	
  		 }
	</script>
</head>

<body>
<header>
	<h1>Sushi Order Form</h1>
</header>

<form name="order form" action="#" method="post" id="form" action="process.php">
	<div id="menu">
	<fieldset>
		<legend>Menu:</legend>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="Tuna" id="Tuna" onchange="calculate()" placeholder="0"/><label for="Tuna">Tuna $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0"  name="FattyTuna" id="FattyTuna" onchange="calculate()" placeholder="0"/><label for="FattyTuna">Fatty Tuna $3.49</label>
					</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0"  name="Salmon" id="Salmon" onchange="calculate()" placeholder="0"/><label for="Salmon">Salmon $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0"  name="Yellowtail" id="Yellowtail" onchange="calculate()" placeholder="0"/><label for="Yellowtail">Yellowtail $2.49</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="Shrimp" id="Shrimp" onchange="calculate()" placeholder="0"/><label for="Shrimp">Shrimp $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="SweetShrimp" id="SweetShrimp" onchange="calculate()" placeholder="0"/><label for="SweetShrimp">Sweet Shrimp $3.99</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="Squid" id="Squid" onchange="calculate()" placeholder="0" class="menuitem"/><label for="Squid">Squid $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="Mackerel" id="Mackerel" onchange="calculate()" placeholder="0" class="menuitem"/><label for="Mackerel">Mackerel $2.49</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="RedSnapper" id="RedSnapper" onchange="calculate()" placeholder="0"/><label for="RedSnapper">Red Snapper $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="Scallop" id="Scallop" onchange="calculate()" placeholder="0"/><label for="Scallop">Scallop $2.99</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="Fluke" id="Fluke" onchange="calculate()" placeholder="0"/><label for="Fluke">Fluke $2.29</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="WhiteTune" id="WhiteTuna" onchange="calculate()" placeholder="0"/><label for="WhiteTuna">White Tuna $2.49</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="Octopus" id="Octopus" onchange="calculate()" placeholder="0"/><label for="Octopus">Octopus $2.29</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="Eel" id="Eel" onchange="calculate()" placeholder="0"/><label for="Eel">Eel $2.79</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="CrabMeat" id="CrabMeat" onchange="calculate()" placeholder="0"/><label for="CrabMeat">Crab Meat $1.99</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="Urchin" id="Urchin" onchange="calculate()" placeholder="0"/><label for="Urchin">Urchin $3.99</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="SmokedSalmon" id="SmokedSalmon" onchange="calculate()" placeholder="0"/><label for="SmokedSalmon">Smoked Salmon $2.49</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="Egg" id="Egg" onchange="calculate()" placeholder="0"/><label for="Egg">Egg $1.79</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="TofuSkin" id="TofuSkin" onchange="calculate()" placeholder="0"/><label for="TofuSkin">Tofu Skin $1.79</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="SmeltRoe" id="SmeltRoe" onchange="calculate()" placeholder="0"/><label for="SmeltRoe">Smelt Roe $2.79</label>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="number" min="0" name="SalmonRoe" id="SalmonRoe" onchange="calculate()" placeholder="0"/><label for="SalmonRoe">Salmon Roe $3.49</label>
				</div>
				<div class="col-xs-6">
					<input type="number" min="0" name="SeaBass" id="SeaBass" onchange="calculate()" placeholder="0"/><label for="SeaBass">Sea Bass $2.29</label>
				</div>
			</div>
				<div id = "GorW">
				<div class="row">
				<div class="col-xs-12">
					<label> Would you like ginger and wasabi?*: </label>
					<p>
						<input type="radio" name="GingerWasabi" id="Yes" value="Yes" required />
						<label for = "Yes">Yes</label>
						<input type="radio" name="GingerWasabi" id="No" value="No" required />
						<label for = "No">No</label>
						<input type="radio" name="GingerWasabi" id="JustGinger" value="JustGinger" required />
						<label for = "JustGinger">Just ginger</label>
						<input type="radio" name="GingerWasabi" id="JustWasabi" value="JustWasabi" required />
						<label for = "JustWasabi">Just wasabi</label>
					</p>
				</div>
			</div>
			</div>
	</fieldset>
	</div>
	<div>
		<fieldset>
			<legend>Order Information:</legend>
			<div class="row">
				<div class="col-xs-6">
					<label for="FirstName"> First name*:</label><input type="text" name="FirstName" id="FirstName" class="input" placeholder="Finn" required />
					
				</div>
				<div class="col-xs-6">
					<label for="LastName" class = "required"> Last name:</label><input type="text" name="LastName" id="LastName" class="input" placeholder="Tuna" /><br>
				</div>
			</div>
		
			<div class="row">
				<div class="col-xs-6">
					<label for="Phone">Phone number*: </label><input type="text" class="bfh-phone input" name="Phone" id="Phone" data-format="(ddd) ddd-dddd" placeholder="(734) 555-5555" required /><br>		
				</div>
				<div class="col-xs-6">
		  			<label for="Email"> Email: </label><input type="email" name="Email" id="Email" class="input" placeholder="GariWasabi@Sadako.com" /><br>
		  		</div>
		  	</div>
		  	<div class="row">
				<div class="col-xs-12" id="OrderSelect">
				<label> Order Type*: </label>
					<input type="radio" name="OrderType" id="PickUp" value="Pick-Up" onclick="closeDelivery()" required />
					<label for = "PickUp">Pick-Up</label>
					<input type="radio" name="OrderType" id="Delivery" value="Delivery" onclick="openDelivery()" required /><label for ="Delivery"> Delivery</label><br>
				</div>

			</div>
			<div id="deliveryInfo">
				<div class="row">
					<div class="col-xs-6">
						<label for="StreetAddress"> Street Address*: </label><input type="text" name="StreetAddress" placeholder="555 State Street" id="StreetAddress" class="input"/>
					</div>
					<div class="col-xs-6">
						<label for="StreetAddress2"> Building Name/Suite/Apt: </label><input type="text" name="StreetAddress2" id="StreetAddress2" placeholder="Apt.2" class="input" /><br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<label for="City"> City*: </label><input type="text" name="City" id="City" placeholder="Ann Arbor" class="input"/>
					</div>
					<div class="col-xs-6">
						<label for="ZipCode"> Zip Code: </label><input type="text" name="ZipCode" id="ZipCode" placeholder="48104" class="input" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<label>Payment Type*: </label>
					<input type="radio" name="Payment" id="Credit" onclick="openMe()"/>
						<label for= "Credit">Credit</label>
					<input type="radio" name="Payment" id="Cash" onclick="closeMe()"/>
						<label for= "Cash">Cash</label>
				</div>
			</div>
		</fieldset>
	</div>
	<div id="billing">
		<fieldset>
			<legend>Billing Information</legend>			
			<div class="row">
				<div class="col-xs-6">
					<label for="NameOnCard">Name on Card:</label><input type="text" name="NameOnCard" id="NameOnCard" placeholder="Finn S Tuna" class="input"/>
				</div>
				<div class="col-xs-6">
					<label for="Cardtype">Card Type:</label>
					<select name="Cardtype" class="input" id="Cardtype">
						<option value="blank">Choose</option>
						<option value="mastercard">Mastercard</option>
						<option value="visa">Visa</option>
						<option value="amex">American Express</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<label for = "CardNumber">Card Number: </label>
					<input type="text" name="CardNumber" id="CardNumber" placeholder="XXXX XXXX XXXX XXXX" class="input">
				</div>
				<div class="col-xs-6">
					<label for = "secure">Security Code: </label><input type="text" name ="secure" id= "secure" placeholder="123" maxlength="3" class="input"/>
				</div>
			</div>

			<div class="row">
				<div class = "col-xs-6" id="expirationDate">
					<label for="date">Expiration Date:</label>
						<select name="date" class="input" id="date">
							<option value="blank"> </option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<select name="date" class="input" id="year">
							<option value="blank"> </option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<label for="StreetAddress"> Billing Address*: </label><input type="text" name="StreetAddress" placeholder="555 State Street" id="DeliveryAddress" class="input"/>
				</div>
				<div class="col-xs-6">
					<label for="StreetAddress2"> Building Name/Suite/Apt: </label><input type="text" name="StreetAddress2" id="DeliveryAddress2" placeholder="Apt.2" class="input" /><br>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<label for="City"> City*: </label><input type="text" name="City" id="DeliveryCity" placeholder="Ann Arbor" class="input"/>
				</div>
				<div class="col-xs-6">
					<label for="ZipCode"> Zip Code: </label><input type="text" name="ZipCode" id="DeliveryZipCode" placeholder="48104" class="input"/>
				</div>
			</div>
		</fieldset>
		</div>


<div id="order_contents">
	<fieldset>
	<legend>Order Contents</legend>

		<dl class="summary">
			<dt>SUB TOTAL</dt>
				<dd class = "money">
					$
					<span id="bSubTotal">0.00</span>
				</dd>
		</dl>
		<dl class="summary" id="deliveryFee">
			<dt>DELIVERY FEE</dt>
			<dd class="money">
				$
				<span id="bDelivery">3.00</span>
			</dd>
		</dl>
		<dl class="summary">
			<dt>TAX</dt>
			<dd class="money">
				$
				<span id="bTax">0.00</span>
			</dd>
		</dl>
		<dl class="total">
			<dt>TOTAL</dt>
			<dd class="money">
				$
				<span id="bTotal">0.00</span>
			</dd>
		</dl>
		<div id="instructions">
			<label for="specialInstructions">Special Instructions:</label>
			<textarea form="form" id="specialInstructions" name="Special Instructions" cols="40" rows="3" class="input"></textarea>
		</div>
		<div id="submit">
			<button id="action_button" class = "form_buttons" type="submit" value="Place Order" form="form">Place Order</button>
			<button class ="form_buttons" type="reset" form="form" onclick="resetMe()">Reset</button>	
		</div>
	</fieldset>
</form>
</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-formhelpers.min.js"></script>
</body>
</html>
