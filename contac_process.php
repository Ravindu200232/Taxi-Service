<?php

include 'config.php';

    $c_Cno = $_POST["Cno"]?$_POST["Cno"]:"0";
    $c_name = $_POST["Cname"]?$_POST["Cname"]:"";
    $c_email = $_POST["Cemail"]?$_POST["Cemail"]:"";
    $c_mes = $_POST["Ymessage"]?$_POST["Ymessage"]:"";
    

    $sql = "INSERT INTO contact (C_id,C_name,C_email,C_message)
    VALUES ('$c_Cno','$c_name','$c_email','$c_mes')";


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
           <title>Contact || Process</title>
           <link rel="stylesheet" href="src/contac_process.css">
       
       
           
       </head>
       <body>
           <div class="main-container">
       
           <h1>
               <?php
       
               echo "Mr $c_name your  Request are recived";
       
       
       
               ?>
               <br><br>
               <button>
                   <a href="logMain.php">return Home</a>
                   
               </button>
           
           </h1>
       
           
       
       
       
               
           </div>
       
             
       </body>
       </html>';

