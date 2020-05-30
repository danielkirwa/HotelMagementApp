function showlocation(argument) {
	// body...
	document.getElementById('Location').style.display="block";
}
function closelocation(argument) {
	// body...
	document.getElementById('Location').style.display="none";
}
function openfootersidebar(argument) {
	// body...
	document.getElementById('footermenu').style.display="block";
	
}
function closefootersidebar(argument) {
	// body...
	document.getElementById('footermenu').style.display="none";
}
function openbooking(argument) {
	// body...
	document.getElementById('bookform').style.display="block";
}
function closebooking(argument) {
	// body...
	document.getElementById('bookform').style.display="none";
}

function preventdefault(event) {
	// body...
	
	event = event || window.event;
	if (event.preventDefault) {
		event.preventDefault();
	} else {
		event.returnValue = false;
	}
}



