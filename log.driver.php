<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TAXI || Driver</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/drives.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>
    <div class="main-container">
        
        <header class="header">
            <a href="#" id="logo"><img src="img/logo.png" alt="logo" id="logo-img"></a>
            <nav class="navbar">
                <a href="logMain.php">Home</a>
                <a href="logfeet.php">Our Fleets</a>
                <a href="loginpackage.php">Packages</a>
                <a href="log.driver.php">Driver</a>
                <a href="logabout.php">About Us</a>
                <a href="logcontac.php">Contact Us</a>
                <a href="login.php">log Out</a>
            </nav>

            <a href="#" id="menu-bars" class="fas fa-bars"></a>

           
        </header>

        <!--drive-form-->
    <div class="drive-form-div">
        <form class="drive-form" method = "post" action="driver_process.php">
            
            
            <table class="drive-table">

                <tr>
                    <td><h1 class="form-head-text">Signup to drive
                        with MR TAXI</h1>

                    </td>



                    
                </tr>

                <tr>
                    <td>
                         <!-- <label>Driver NO</label>  -->
                        
                    </td>
                    <td> 
                    <input type="hidden" id="myInput" name="Dno" value="">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="Dname" name="Dname" >

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Email</label>
                        
                    </td>
                    <td>
                        <input type="email" id="Demail" name="Demail" >

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone Number</label>
                        
                    </td>
                    <td>
                        <input type="number" id="Dnumber" name="Dnumber" >

                    </td>
                </tr>

                


                <tr>
                    <td>
                        <label>Work Time</label>
                    </td>
                    <td>
                        <select id="workTime" name="workTime">
                            <option value="fullTime">Full Time</option>
                            <option value="partTime">Part Time</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Working District</label>
                        
                    </td>
                    <td>
                        <input type="text" name="WDistance" id="WDistance">
                        
                        
                    </td>
                </tr>


                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <button id="Register" name="Register">Regeister</button>
                        
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