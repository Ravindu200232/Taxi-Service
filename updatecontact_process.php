<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c_Cno = $_POST["c_id"]; 
    $c_name = $_POST["Cname"];
    $c_email = $_POST["Cemail"];
    $c_mes = $_POST["Ymessage"];

    $sql = "UPDATE contact SET
        C_name='$c_name',
        C_email='$c_email',
        C_message='$c_mes'
        WHERE C_id='$c_Cno'";

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
    <button><a href="admincontac.php">Back</a></button></h1>
    
    
</body>
</html>
