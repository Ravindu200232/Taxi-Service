<?php

include 'config.php';

    $d_no = $_POST["Dno"]?$_POST["Dno"]:"0";
    $d_name = $_POST["Dname"]?$_POST["Dname"]:"";
    $d_email = $_POST["Demail"]?$_POST["Demail"]:"";
    $d_phone = $_POST["Dnumber"]?$_POST["Dnumber"]:"";
    $d_work = $_POST["workTime"]?$_POST["workTime"]:"";
    $d_distric = $_POST["WDistance"]?$_POST["WDistance"]:"";


    $sql = "INSERT INTO driver (D_no,driver_name,driver_email,driver_pnumber,driver_wtime,driver_wdistric)
    VALUES ('$d_no','$d_name','$d_email','$d_phone','$d_work','$d_distric')";



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
    <title>Driver || Process</title>
    <link rel="stylesheet" href="src/driver_proces.css">
    

   

    
</head>
<body>
    <div class="main-container">

    <h1>
        <?php

        echo "Mr $d_name your Registration Successfull";



        ?>
        <br><br>
        <button>
            <a href="logMain.php">return Home</a>
            
        </button>
    
    </h1>

    



        
    </div>

      
</body>
</html>