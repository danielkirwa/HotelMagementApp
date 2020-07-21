var selectedRow = null

function onFormSubmit() {
	// body...
	if (validate()) {
	var formData = readformdata();
	if (selectedRow == null) {
		insertnewrecord(formData);
	}else{
		
	updateRecord(formData);
	
	}
	resetfield();
	}
}
function readformdata() {
	// body...
	var formData = {};
	formData["item"]  = document.getElementById("item").value;
	formData["quantity"]  = document.getElementById("quantity").value;
	formData["price"]  = document.getElementById("price").value;
	
	console.log(formData);
	return formData;
	
}    
function insertnewrecord(data) {
	// body...
	var table = document.getElementById("itemlist").getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(table.lenght);
	cell1= newRow.insertCell(0);
	cell1.innerHTML=data.item;
	cell2= newRow.insertCell(1);
	cell2.innerHTML=data.quantity;
	cell3= newRow.insertCell(2);
	cell3.innerHTML=data.price;
	cell4= newRow.insertCell(3);
	cell4.innerHTML=`<a href="#" onclick="onEdit(this)">Edit</a>
					<a href="#" onclick="onDelete(this)" style ="color: red">Delete</a>`; 

}
function resetfield() {
	// body...
	document.getElementById("item").value="";
	document.getElementById("quantity").value ="";
	document.getElementById("price").value="";
	
}

function onEdit(td){
	// body...
	selectedRow = td.parentElement.parentElement;
	document.getElementById("item").value= selectedRow.cells[0].innerHTML;
	document.getElementById("quantity").value= selectedRow.cells[1].innerHTML;
	document.getElementById("price").value= selectedRow.cells[2].innerHTML;
	
}

function updateRecord(formData) {
	// body...
	selectedRow.cells[0].innerHTML= formData.item;
	selectedRow.cells[1].innerHTML= formData.quantity;
	selectedRow.cells[2].innerHTML= formData.price;
	
}
function onDelete(td) {
	// body...if
	if(confirm('Do you want to delete')){
		row = td.parentElement.parentElement;
	document.getElementById("itemlist").deleteRow(row.rowIndex);
	resetfield();
	}
	
}
function validate() {
	// body...
	isValid = true;
	if(document.getElementById("item").value == ""){
		isValid = false;
		document.getElementById("fullnamevalidationerror").style.display = "block";
	}else{
		isValid = true;
		if (!document.getElementById("fullnamevalidationerror").classList.contains("hide")) {
			document.getElementById("fullnamevalidationerror").style.display = "none";
		}
	}
	return isValid;
}