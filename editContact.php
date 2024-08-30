<?php
include 'config.php';

$id =$_GET['id'];


$sql ="SELECT * FROM contact WHERE 	C_id='$id'";

$Cname="";
$Cemail="";
$Cmessage="";


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $Cname=$row['C_name'];
        $Cemail=$row['C_email'];
        $Cmessage=$row['C_message'];
        


    }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/editcontact.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    
</head>
<body>



<!--contac section stared-->

    <div class="Contac">
        
        
        <div class="lnner-Contac">
          

            <div class="Contac-content">
                
                <div class="inner-Contac-text">
                    <form method = "post" action="updatecontact_process.php">
                        <h1>Update Content</h1>
                        
                        <br><br>
                        <label>Contact_ID</label>
                        <br><br>
                        <input type="text" id="c_id" name="c_id" class="Cform-text" value="<?php
                        echo $id;?>"readonly="readonly">

                        
                        <br><br>

                        <label>Name</label>
                        <br><br>
                        <input type="text" id="Cname" name="Cname" class="Cform-text" value="<?php
                        echo $Cname;?>">
                        <br><br>
                        <label>Email Address</label>
                        <br><br>
                        <input type="text" id="Cemail" name="Cemail" class="Cform-text" value="<?php
                        echo $Cemail;?>">
                        <br><br>
                        <label>Your Message</label>
                        <br><br>
                        <textarea cols="20" rows="4" id="Ymessage" name="Ymessage" class="Cform-text"><?php
                        echo $Cmessage;?></textarea>
                        <br><br><br>

                        <input type="submit" id="Csubmit" name="Csubmit" value="Update">
                    </form>
                    
                    
                </div>    
                           
            </div>

            

            
        </div>

    </div>

   





    

</body>
</html>


