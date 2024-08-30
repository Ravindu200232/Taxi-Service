<?php

include 'config.php';




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


    $sql = "INSERT INTO booking (customer_id,f_name,l_name,email,p_number,b_data,b_time,p_location,d_location,t_type,hourses,destination,passenger,v_type,price)
    VALUES ('$C_id','$fname','$lname','$email','$pnumber','$Bdate','$Btime','$Plocation','$Dlocation','$Tra_type','$hours','$dkm','$pacount','$vType','$price')";



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
    <link rel="stylesheet" href="src/proces_form.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>

    
   

    
</head>
<body>
    <!--header section started-->
    <div class="main-container">
        
        

 <div class="summrey">
        <table>
            <h1>Summrey Sheet</h1>

            <tr>
                <td>First Name</td>
                <td>
                <?php
                echo ("$fname");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Last Name</td>
                <td>
                <?php
                echo ("$lname");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>E-mail Address</td>
                <td>
                <?php
                echo ("$email");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td>
                <?php
                echo ("$pnumber");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Pickup Date</td>
                <td>
                <?php
                echo ("$Bdate");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Pickup Time</td>
                <td>
                <?php
                echo ("$Btime");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Pickup Location</td>
                <td>
                <?php
                echo ("$Plocation");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Drop-Off-Location</td>
                <td>
                <?php
                echo ("$Dlocation");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Transfer Type</td>
                <td>
                <?php
                echo ("$Tra_type");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Extra Time</td>
                <td>
                <?php
                echo ("$hours");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Distance To Destination(KM)</td>
                <td>
                <?php
                echo ("$dkm");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Passengers</td>
                <td>
                <?php
                echo ("$pacount");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Select Vehicle</td>
                <td>
                <?php
                echo ("$vType");


                 ?>
                
                
              
            </td>
            </tr>

            <tr>
                <td>Price</td>
                <td>
                <?php
                echo ("$price");


                 ?>
                
                
              
            </td>
            </tr>


            <tr>
                <td>
                    <button><a href="payment.php">Payement</a></button>
                </td>
            </tr>

            <tr>
                <td>
                    <button><a href="logMain.php">Cancel Booking</a></a></button>
                </td>
            </tr>

            
        </table>
    </div>

</div>

    
    
</body>
</html>
