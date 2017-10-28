function confirm(){
	var x = document.forms["mainForm"]["txtPassword"].value;
	var y = document.forms["mainForm"]["confPassword"].value;
	if (x != y || x.length < 7 || !hasNumbers(x)){
		alert("Passwords do not match or password invalid.");
		return false;
	}
}

function hasNumbers(t){
	var regex = /\d/g;
	return regex.test(t);
}