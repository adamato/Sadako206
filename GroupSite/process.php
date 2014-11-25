<?php
    $filename = "SadakoOrderForm.csv";
    $exists = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "Thank you for placing your order.\n";//EMail message
	$stringToAdd="";	//File into

	if (!$exists){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";
		}
		$stringToAdd.="\n";
		$new=False;
		fwrite($handle, $stringToAdd);
	}
	$stringToAdd="";
	foreach($_POST as $name => $value) {
		print "$name : $value<br>";
		$msg .="$name : $value\n";
		$stringToAdd.="$value,";
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);
	//now close the file
	fclose($handle); 
	$to = $_POST["Email"];
	$headers = "From: ". $_POST["FirstName"] ."<".$_POST["Email"]. ">\r\n";
	
	mail($to, 'SadakoOrderForm', $msg,$headers);



	echo "Email sent";
?>