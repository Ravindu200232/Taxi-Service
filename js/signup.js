function Signup() {

    var fn = document.getElementById("firstname").value;
    var ln = document.getElementById("lastname").value;
    var em = document.getElementById("email").value;
    var pa = document.getElementById("pass").value;
    var re_pa = document.getElementById("RePass").value;
    
    isTextEmpty(fn, "firstname");
    isTextEmpty(ln, "lastname");
    isTextEmpty(em, "email");

if(pa==re_pa && pa!="" && re_pa!=""){
    document.getElementById('pass').style.borderColor = "green";
    document.getElementById('RePass').style.borderColor = "green";
    document.getElementById('lable').innerHTML=""
}

else{
    document.getElementById('pass').style.borderColor = "red";
    document.getElementById('RePass').style.borderColor = "red";
    document.getElementById('lable').innerHTML="Password mismatched or empty";
    document.getElementById('lable').style.color="red";
}


    
}

function isTextEmpty(tf, id) {
    if (tf === "" || tf === null) {
        document.getElementById(id).style.borderColor = "red";
    }
    else{
        document.getElementById(id).style.borderColor = "green";
    }
}








