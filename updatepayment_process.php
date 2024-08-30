<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_id = $_POST["pindex"]; 
    $c_type = $_POST["crd-type"];
    $n_card = $_POST["cardname"];
    $num_card = $_POST["cardnumber"];
    $c_month = $_POST["expmonth"];
    $c_year = $_POST["expyear"];
    $c_cvv = $_POST["cvv"];

    $sql = "UPDATE payment SET
        card_type='$c_type',
        card_name='$n_card',
        card_number='$num_card',
        card_month='$c_month',
        card_year='$c_year',
        card_cvv='$c_cvv'
        WHERE payment_id = $p_id";

    if (mysqli_query($conn, $sql)) {
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&family=Nunito:wght@300&display=swap');
        button{
            text-align:center;
            padding:20px 40px 20px 40px;
            margin-left:auto;
            margin-right:auto;
            background-color:yellow;
            border-radius:5px;
            border:none;

        }
        button:hover{
            background-color:green;
        }
        body{
            background-color:gray;
        }
        a{
            text-decoration:none;
            color :black;

        }
        h1{
            text-align:center;
            font-family: 'Kumbh Sans', sans-serif;
            font-family: 'Nunito', sans-serif;

        }
    </style>
</head>
<body>
    <h1>Update Successfull<br>
    <button><a href="adminPayment.php">Back</a></button></h1>
    
    
</body>
</html>
