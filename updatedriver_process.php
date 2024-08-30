<?php

include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $d_no = $_POST["Dno"]?$_POST["Dno"]:"0";
    $d_name = $_POST["Dname"]?$_POST["Dname"]:"";
    $d_email = $_POST["Demail"]?$_POST["Demail"]:"";
    $d_phone = $_POST["Dnumber"]?$_POST["Dnumber"]:"";
    $d_work = $_POST["workTime"]?$_POST["workTime"]:"";
    $d_distric = $_POST["WDistance"]?$_POST["WDistance"]:"";


    $sql = "UPDATE driver SET
    driver_name='$d_name',
    driver_email='$d_email',
    driver_pnumber='$d_phone',
    driver_wtime='$d_work',
    driver_wdistric='$d_distric'
    WHERE D_no='$d_no'";



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
    <button><a href="adminDriver.php">Back</a></button></h1>
    
    
</body>
</html>