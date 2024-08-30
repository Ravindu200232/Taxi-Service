<?php
require 'config.php';
if(isset($_POST["submit"])){
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location:logMain.php");

        }
        else{
            echo
            "<script>alert('Wrong Password');</script>";
        }

    }
    else{
        echo
            "<script>alert('User Not Registered');</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TAXI || Log In</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/login.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>
    <!--header section started-->
    <div class="main-container">
        
        <header class="header">
            <a href="#" id="logo"><img src="img/logo.png" alt="logo" id="logo-img"></a>
            <nav class="navbar">
                <a href="main.php">Home</a>
                <a href="ourFleets.php">Our Fleets</a>
                <a href="package.php">Packages</a>
                
                <a href="about.php">About Us</a>
                
                <a href="login.php">log in</a>
            </nav>

            <a href="#" id="menu-bars" class="fas fa-bars"></a>

           
        </header>>
        <!--header section include login form-->

        <!--login-form-->
     <div class="log-form-div">
        <form class="log-form" action="" method="post" autocomplete="off">
            
            
            <table class="login-table">

                <tr>
                    <td><h1 class="form-head-text">Login</h1>

                    </td>



                    <td>
                    
                        <div class="logo-media">
                            <img src="img/User-Profile-Transparent.png" id="login-img">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Username or Email : </label>
                        
                    </td>
                    <td>
                        <input type="text" id="usernamemail" name="usernameemail" required value="">

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
                        <button type="submit" id="login" name="submit">Login</button>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="remember" id="remember" value="remember"><span>Remember me</span>

                    </td>

                    <td><label>Create Account <a href="signup.php" style=color:blue;>Click</a></label>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        <button id="cancel" name="cancel">Cancel</button>
                    </td>

                    <td>
                        <h3>Forgot <a href="#">Password</a></h3>
                    </td>
                </tr>
            </table>

            

            <br><br>

            

         

        </form>
    </div>

        
    </div>

     <!--login-form-->

    

    


  

    
<script src="js/main.js"></script>
<script src="js/booking.js"></script>
</body>
</html>