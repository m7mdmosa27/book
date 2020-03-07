
// ***
// ******
// ********
// ***********

//***************************************************** this function for comfirm password *****************************************************

var pass = document.getElementById('password'),
	conpass = document.getElementById('confirmpass'),
	chak = document.getElementById('chak');
try {
	conpass.onkeyup = function () {
		"use strict";
		console.log(pass.value);
		console.log(conpass.value);
		if (pass.value != "" && conpass.value != "") {
			if (pass.value != conpass.value) {
				chak.style.color = "red";
				chak.innerHTML = " is not equal the password ";
				conpass.style.background ="#ff000052";
			}else{
				chak.style.color = "green";
				chak.innerHTML="is equal ";
				conpass.style.background ="#27ff0052";
				pass.style.background ="#27ff0052";
			}
		}else{
			conpass.style.background ="#fff";
			pass.style.background ="#fff";
			chak.innerHTML ="";
		}

	}
}catch{
	console.log("Function of confirm is not work.");
}

//*************************************************************************************************************************************************

// ***********
// ********
// *****
// ***

// ***
// ******
// ********
// ***********

//*******************************************	this code for hide the box and display by the button 	*******************************************


try {
	var disForms  = document.getElementsByClassName('forms'),  		//  for take data from forms 
		disInsert = document.getElementsByClassName('insertData'), 	//	for take data from insert 
		discoun   = document.getElementsByClassName('countenr'),	//
		disDelet  = document.getElementsByClassName('deletData'),
		disUpdate = document.getElementsByClassName('updataData');
	console.log(disForms);
	console.log(disDelet) ;
	console.log(disUpdate);
	//disForms[0].style.display="none";
	disInsert[0].style.display="";  					//for hide box insert
	disDelet[0].style.display="none";
	disUpdate[0].style.display="none";

	/*
	var buttInsert=document.createElement("button");		// for create button
	var buttDelet=document.createElement("button");
	var buttUpdate=document.createElement("button");
	function setbut(x,y){									//this function for set the button inside the forms  
		x.innerHTML=y;
		x.value=y;
		disForms[0].appendChild(x);
	}
	setbut(buttInsert,"Insert");
	setbut(buttUpdate,"Update");
	setbut(buttDelet,"Delet");
	function styleForBut(x){								//this function for style button 
		x.style.background	="#0037ff";
		x.style.width		="100px";
		x.style.height		="40px";
		x.style.fontSize	="18px";
		x.style.borderRadius="20px";
		x.style.color		="#fff";
		x.style.margin		="30px 200px 0px 70px ";

	}
	styleForBut(buttInsert);
	styleForBut(buttDelet);
	styleForBut(buttUpdate);
	function showBox(x,y){									//this function for show box to enter the data 
		x.onclick=function(){
			y[0].style.display="";
			x.style.display="none";
		}
	}
	showBox(buttInsert,disInsert);
	showBox(buttUpdate,disUpdate);
	showBox(buttDelet,disDelet);
	*/

	var insRadio=document.getElementById('insert'),
		updRadio=document.getElementById('updata'),
		delRadio=document.getElementById('delet') ,
		nameRadio=document.getElementsByName('controlData');
	console.log(insRadio);
	console.log(updRadio);
	console.log(delRadio);
	console.log(nameRadio);
	
	function showBox(x,y){									//this function for show box to enter the data 
		x.onclick=function(){
			disInsert[0].style.display="none";  					//for hide box insert
			disDelet[0].style.display="none" ;
			disUpdate[0].style.display="none";				
			y[0].style.display="";

		}
	}
	showBox(insRadio,disInsert);
	showBox(updRadio,disUpdate);
	showBox(delRadio,disDelet);

}catch{
	console.log("the function of display is not work ");
}

//*************************************************************************************************************************************************

// ***********
// ********
// *****
// ***

// ***
// ******
// ********
// ***********

//*******************************************	this code for hide the box and display by the radio 	*******************************************

