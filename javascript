function tickets() {
	var tickets,subtotal,vat;
	tickets = document.getElementById("no1").value;
	document.getElementById("total").innerHTML = 60 * tickets + " gbp";
	if (document.getElementById("choice1").checked) {
		subtotal = 40 * tickets;
		vat = (40 * tickets)*0.20;
		document.getElementById("vat").innerHTML = vat + " gbp";
		document.getElementById("subtotal").innerHTML = subtotal + " gbp";
		document.getElementById("total").innerHTML = subtotal + vat + " gbp";
	} else {
		subtotal = 60 * tickets;
		vat = (60 * tickets)*0.20;
		document.getElementById("vat").innerHTML = vat + " gbp";
		document.getElementById("subtotal").innerHTML = subtotal + " gbp";
		document.getElementById("total").innerHTML = subtotal + vat + " gbp";
	}
}
