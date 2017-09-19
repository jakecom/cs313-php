function clickMe() {
	alert("You Fell For It!");
}

function colorChange(){
	var textbox_id = "colorInput";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	var colors = textbox.value;
	div.style.backgroundColor = colors;
}