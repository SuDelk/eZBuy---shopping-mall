function showItem(name) {
	if(name=="l1"){
		alert("nice");
		document.getElementById("itemName").innerHTML="Red and White Nike Air Jordon 1";
		document.getElementById("mainItemImage").src = "../Images/jordan.jpg";
	}
}


function loadItems(name){

	
	if(name=="l1"){
		alert("Jordan's");
		showItem('l1');
		
		

	}
	else if(name=="l2"){
		window.location.href = "../Item Description/Item Description.html";
	}
	else if(name=="l3"){
		window.location.href = "../Item Description/Item Description.html";
	}
	else if(name=="l4"){
		window.location.href = "../Item Description/Item Description.html";
	}


}

function changeimg(){
	document.getElementById("mainItemImage").src = "../Images/jordan.jpg";
}