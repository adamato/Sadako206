<header>
	<nav>
		
		<ul class="nav nav-justified">
			<li><img id="logo" src="sadako-logo.png" alt="Sadako Logo"></li>
			<li><a href="index.php"
				<?php
	  				if ($fName == "index.php"){
	  					echo "class = \"current\"";
	  				}
	  			?>>Home</a></li>
	  		<li><a href="menu.php"
				<?php
	  				if ($fName == "menu.php"){
	  					echo "class = \"current\"";
	  				}
	  			?>>Menu</a></li>
	  		<li><a href="order.php"
				<?php
	  				if ($fName == "order.php"){
	  					echo "class = \"current\"";
	  				}
	  			?>>Order</a></li>
	  		<li><a href="catering.php"
				<?php
	  				if ($fName == "catering.php"){
	  					echo "class = \"current\"";
	  				}
	  			?>>Catering</a></li>
	  		<li><a href="contact.php"
				<?php
	  				if ($fName == "contact.php"){
	  					echo "class = \"current\"";
	  				}
	  			?>>Contact</a></li>
		</ul>
	</nav>
</header>