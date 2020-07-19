
var index = 1;
function addrecord() {
	
    var table = document.getElementById("t02");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	
	var p_name = document.getElementById("p_name");
	var qty = document.getElementById("qty");
	var e_date = document.getElementById("e_date");
	var price = document.getElementById("price");
	
    cell1.innerHTML = p_name.value;
    cell2.innerHTML = qty.value;
    cell3.innerHTML = e_date.value;
    cell4.innerHTML = price.value;	
  }
  
function storerecord() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}


  