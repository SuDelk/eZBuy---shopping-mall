function enLarge(image){

	var big=document.getElementById("mainImage");
	

	if(image=="minImage1"){

			var small=document.getElementById("minImage1");
	
			big.src=small.src;
			
	}
	else if(image=="minImage2"){
			var small=document.getElementById("minImage2");

	
			big.src=small.src;
			
	}
	else if(image=="minImage3"){
			var small=document.getElementById("minImage3");

	
			big.src=small.src;
			
	}
	else{
		alert("Invaild");
	}
}