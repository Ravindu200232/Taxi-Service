<?php

include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

$C_id = $_POST["CID"]?$_POST["CID"]:"0";
$fname = $_POST["fname"]?$_POST["fname"]:"";
$lname = $_POST["lname"]?$_POST["lname"]:"";
$email = $_POST["email"]?$_POST["email"]:"";
$pnumber = $_POST["pnumber"]?$_POST["pnumber"]:"";
$Bdate = $_POST["Bdate"]?$_POST["Bdate"]:"";
$Btime = $_POST["Btime"]?$_POST["Btime"]:"";
$Plocation = $_POST["Plocation"]?$_POST["Plocation"]:"";
$Dlocation = $_POST["Dlocation"]?$_POST["Dlocation"]:"";
$Tra_type = $_POST["Tra-type"]?$_POST["Tra-type"]:"";
$hours = $_POST["hours"]?$_POST["hours"]:"";
$dkm = $_POST["dkm"]?$_POST["dkm"]:"0";
$pacount = $_POST["pacount"]?$_POST["pacount"]:"";
$vType = $_POST["vType"]?$_POST["vType"]:"";
$price =$_POST["price"]?$_POST["price"]:"0";



    
    $sql = "UPDATE booking SET
    f_name = '$fname',
    l_name = '$lname',
    email = '$email',
    p_number = '$pnumber',
    b_data = '$Bdate',
    b_time = '$Btime',
    p_location = '$Plocation',
    d_location = '$Dlocation',
    t_type = '$Tra_type',
    hourses = '$hours',
    destination = '$dkm',
    passenger = '$pacount',
    v_type = '$vType',
    price = '$price'
    WHERE customer_id = '$C_id'";


   
if(mysqli_query($conn,$sql)){
    
}
else{
    echo "error".mysqli_connect_error();
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
    <button><a href="adminBooking.php">Back</a></button></h1>
    
    
</body>
</html>
