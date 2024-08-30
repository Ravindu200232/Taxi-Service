<?php
require 'config.php';

if(!empty($_SESSION["id"])){
    header("Location: logMain.php");
}
if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){

        echo
        "<script>alert('username or Email Has Already Taken');</script>";
    }

    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('$id','$name','$username','$email','$password')";
            mysqli_query($conn,$query);
            echo
            "<script>alert('Registration Successfull');</script>";
        }

        else{
            echo
            "<script>alert('Password Does Not Match');</script>";
        }
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/signups.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>
    <div class="main-container">
        
        <header class="header">
            <a href="#" id="logo"><img src="img/logo.png" alt="logo" id="logo-img"></a>
            <nav class="navbar">
               
            </nav>

            <a href="#" id="menu-bars" class="fas fa-bars"></a>

           
        </header>>

        <!--booking-form-->
    <div class="sign-form-div">
        <form class="sign-form" action="" method="post" autocomplete="off">
            
            
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
                    <td>
                        <label>Full Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="name" name="name" required value="">

                    </td>
                </tr>

                <tr>
                    <td>
                        
                        
                    </td>
                    <td>
                    <input type="hidden" id="myInput" name="id" value="">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>User Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="username" name="username"  required value="">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>E-Mail</label>
                        
                    </td>
                    <td>
                        <input type="email" id="email" name="email" required value="">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Password</label>
                        
                    </td>
                    <td>
                        <input type="password" id="password" name="password" required value="">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Confirm-Password</label>
                        
                    </td>
                    <td>
                        <input type="password" id="confirmpassword" name="confirmpassword" required value="">

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
                        <button type="submit" id="submit" name="submit">Sign up</button>
                        
                    </td>
                </tr>

               

                

             
            </table>

            

            <br><br>

            

         

        </form>
    </div>

        
    </div>

    

    


  

<script src="js/autogen.js"></script>     
<script src="js/main.js"></script>
<script src="js/signup.js"></script>
</body>
</html>