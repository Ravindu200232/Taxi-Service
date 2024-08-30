

function generateRandomIndexNo() {
    var min = 1000;
    var max = 9999;
    var randomIndexNo = Math.floor(Math.random() * (max - min + 1)) + min;

    
    document.getElementById("myInput").value = randomIndexNo;
}


generateRandomIndexNo();
