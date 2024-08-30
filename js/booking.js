

for(var i=1; i<=24; i++){
    var select = document.getElementById("hours");
    var option = document.createElement("OPTION");
	select.options.add(option);
	option.text = i;
	option.value = i;
}


for(var i=1; i<=26; i++){
    var select = document.getElementById("pacount");
    var option = document.createElement("OPTION");
	select.options.add(option);
	option.text = i;
	option.value = i;
}

function completeform() {
    var BD = document.getElementById("Bdate").value;
    var BT = document.getElementById("Btime").value;
    var PT = document.getElementById("Plocation").value;
    var DT = document.getElementById("Dlocation").value;
    var FN = document.getElementById("fname").value;
    var LN = document.getElementById("lname").value;
    var EM = document.getElementById("email").value;
    var PH = document.getElementById("pnumber").value;

    isTextEmpty(BD, "Bdate");
    isTextEmpty(BT, "Btime");
    isTextEmpty(PT, "Plocation");
    isTextEmpty(DT, "Dlocation");
    isTextEmpty(FN, "fname");
    isTextEmpty(LN, "lname");
    isTextEmpty(EM, "email");
    isTextEmpty(PH, "pnumber");
}

function isTextEmpty(tf, id) {
    if (tf === "" || tf === null) {
        document.getElementById(id).style.borderColor = "red";
    }
    else{
        document.getElementById(id).style.borderColor = "green";
    }
}

function completeform(){

    var ditination = parseInt(document.getElementById("dkm").value);
    var select = document.getElementById("VType"); 
    var selectedValue = select.value; 
    var time = document.getElementById("hours");
    var Time = time.value;
   
   

if(selectedValue == "KDH"){

   price = Time * 1000 + ditination * 230;
   
}

else if(selectedValue == "KDHFlat"){

   price =Time * 800 + ditination * 180;
   
}

else if(selectedValue == "ALLION"){

   price = Time * 700 + ditination * 130;
   
}

else if(selectedValue == "AXIO"){

   price = Time * 700 + ditination * 130;
   
}


if(selectedValue == "PRIUS"){


   price = Time * 650 + ditination * 115;
   
}

else if(selectedValue == "WAGONR"){

   price = Time * 500 + ditination * 100;
   
}

else if(selectedValue == "ALTO"){

   price = Time * 500 + ditination * 100;
   
}

else if(selectedValue == "NANO"){

   price = Time * 500 + ditination * 130;
   
}






    var priceInput = document.createElement("input");
    priceInput.type = "hidden";
    priceInput.name = "price";
    priceInput.value = price.toFixed(2);
    


    var form = document.querySelector(".booking-form");
    form.appendChild(priceInput);

    form.submit();



}

   



