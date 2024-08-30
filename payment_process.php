<?php

include 'config.php';


    $p_id = $_POST["Pno"]?$_POST["Pno"]:"0";
    $c_type = $_POST["crd-type"]?$_POST["crd-type"]:"";
    $n_card = $_POST["cardname"]?$_POST["cardname"]:"";
    $num_card = $_POST["cardnumber"]?$_POST["cardnumber"]:"";
    $c_month = $_POST["expmonth"]?$_POST["expmonth"]:"";
    $c_year = $_POST["expyear"]?$_POST["expyear"]:"";
    $c_cvv = $_POST["cvv"]?$_POST["cvv"]:"";


    $sql = "INSERT INTO payment (payment_id ,card_type,card_name,card_number,card_month,card_year,card_cvv)
    VALUES ('$p_id','$c_type','$n_card','$num_card','$c_month','$c_year','$c_cvv')";



if(mysqli_query($conn,$sql)){
  
}

else{
    echo "error".mysqli_connect_error();
}


    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/payment_proces.css">

    

    
</head>
<body>
    <div class="main-container">

    <h1>
        Payment successfull
        <br><br>
        <button>
            <a href="logbooking.php">return Home</a>
            
        </button>
    
    </h1>

    



        
    </div>

      
</body>
</html>