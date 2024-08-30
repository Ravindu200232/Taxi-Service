<?php
include 'config.php';

$id =$_GET['id'];




$ufname="";
$uname="";
$uemail="";
$upassword="";

$sql ="SELECT * FROM tb_user WHERE id='$id'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    
$ufname=$row['name'];
$uname=$row['username'];
$uemail=$row['email'];
$upassword=$row['password'];

    }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/signups.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>
    <div class="main-container">
        
       

        <!--booking-form-->
    <div class="sign-form-div">
        <form class="sign-form" action="updateAccount.php" method="post" autocomplete="off">
            
            
            <table class="sign-table">

                <tr>
                    <td><h1 class="form-head-text">Sign Up</h1>

                    </td>



                    <td>
                    
                        <div class="logo-media">
                            <img src="img/User-Profile-Transparent.png" id="login-img">
                        </div>
                    </td>
                </tr>



                <tr>
                    <td><label>User ID</label>
                        
                        
                    </td>
                    <td>
                    <input type="text" id="myInput" name="id"value="<?php echo $id; ?>" readonly="readonly">

                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Full Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="name" name="name" value="<?php
                        echo $ufname;?>">

                    </td>
                </tr>

                

                <tr>
                    <td>
                        <label>User Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="username" name="username"  value="<?php
                        echo $uname;?>">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>E-Mail</label>
                        
                    </td>
                    <td>
                        <input type="email" id="email" name="email" value="<?php
                        echo $uemail;?>">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Password</label>
                        
                    </td>
                    <td>
                        <input type="text" id="password" name="password" value="<?php
                        echo $upassword;?>">
                    </td>
                </tr>

                


                <tr>
                    <td><label id="lable"></label>

                    </td>
                    <td>
                        <h3>Already a member ? <a href="login.php">Log in</a></h3>
                    </td>
                </tr>

                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <button type="submit" id="submit" name="submit" value="Update">Sign up</button>
                        
                    </td>
                </tr>

               

                

             
            </table>

            

            <br><br>

            

         

        </form>
    </div>

        
    </div>

    

    


  

     

<script src="js/signup.js"></script>
</body>
</html>
