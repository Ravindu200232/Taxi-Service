<?php

include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM booking WHERE customer_id = '$id'";

if(mysqli_query($conn,$sql)){

}
else{
    echo "Error : ".mysquli_error($conn)."<br>".$sql;
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
    <h1>Delete Successfull<br>
    <button><a href="adminBooking.php">Back</a></button></h1>
    
    
</body>
</html>
