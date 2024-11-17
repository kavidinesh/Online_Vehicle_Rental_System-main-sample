function checkPassword(){
	
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd")){
		alert("Password Mismatch!");
		return false;
	}
	else{
		alert("Success!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("checkbox").checked){
		document.getElementById("submitbtn").disabled=false;
	}
	else{
		document.getElementById("submitbtn").disabled=true;
	}
}