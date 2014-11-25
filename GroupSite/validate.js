function checkEmail(form){
	if (document.getElementById('Email').value === ""){
		alert("Please enter your Email");
		return false;
	}
	else {
		return true;
	}
}

function checkZip(form){
	if (document.getElementById('ZipCode').value == "48104"){
		return true;
	}
	else {
		alert("We do not deliver to your area");
		return false;
	}
}
