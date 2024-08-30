<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TAXI || Home</title>
    <link rel="stylesheet" href="src/booking.css">
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">

    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>

<!--Heder section starede-->
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

           
        </header>>

        <!--Header section enderd-->

        <!--booking-form-->
    <div class="booking-form-div">
        <form class="booking-form" method="post" action="process_form.php">
            <h1 class="form-head-text">Enter Ride Details</h1>

            <br><br>

            <table class="form-fill" >

                <tr>
                    <td><h3>Enter Contact Details</h3>

                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td>
                        <br><br><input type="hidden" id="myInput" name="CID" value="">
                        
                    </td>

                    <td>
                        
                    </td>

                </tr>

              


                <tr>
                    <td><label>FIRST NAME</label>
                        <br><br>
                        <input type="text" id="fname" name="fname">
                        
                    </td>

                    <td><label>LAST NAME</label>
                        <br><br>
                        <input type="text" id="lname" name="lname">
                        
                    </td>

                </tr>


                <tr>
                    <td>
                        <label>E-MAIL ADDRESS</label>
                        <br><br>
                        <input type="email" id="email" name="email">
                        
                    </td>

                    <td><label>PHONE NUMBER</label>
                        <br><br>
                        <input type="number" id="pnumber" name="pnumber">
                        
                    </td>
                    
                </tr>

                

                <tr>
                    <td><h3>Enter Ride Details</h3>

                    </td>
                    <td>

                    </td>
                </tr>


                <tr>
                    <td>
                        <label>PICKUP DATE</label>
                        <br><br>
                        <input type="date" name="Bdate" id="Bdate">
                        
                    </td>

                    <td><label>PICKUP TIME</label>
                        <br><br>
                        <input type="time" name="Btime" id="Btime">
                        
                    </td>
                    
                </tr>


                <tr>
                    <td>
                        <label>PICKUP LOCATION </label>
                        <br><br>
                        <input type="text" id="Plocation" name="Plocation">
                        
                    </td>

                    <td><label>DROP-OFF-LOCATION</label>
                        <br><br>
                        <input type="text" id="Dlocation" name="Dlocation">
                        
                    </td>
                    
                </tr>


                <tr>
                    <td>
                        <label>TRANSFER TYPE</label>
                        <br><br>
                        <select name="Tra-type" id="Tra-type">
                            <option value="one-way">One Way</option>
                            <option value="return">Return</option>
                        </select>
                        
                    </td>

                    <td><label>EXTRA TIME</label>
                        <br><br>
                        <select id="hours" name="hours"></select>
                        
                    </td>
                    
                </tr>

                <tr>
                    <td>
                    <label>DISTANCE TO DESTINATION (KM)</label>
                    <input type=text name="dkm" id="dkm">
                    </td>
                </tr>

                <tr>
                    <td><h3>Choose a Vehicle</h3>

                    </td>
                    <td>

                    </td>
                </tr>


                <tr>
                    <td><label>PASSENGERS</label>
                        <br><br>
                        <select name="pacount" id="pacount">
                        </select>
                        
                    </td>

                    <td><label>Select Vehicle</label>
                        <br><br>
                        <select name="vType" id="VType">
                            <option value="KDH">KDH High Roof</option>
                            <option value="KDHFlat">KDH Flat Roof</option>
                            <option value="ALLION">Allion</option>
                            <option value="AXIO">Axio</option>
                            <option value="PRIUS">Prius</option>
                            <option value="WAGONR">Wagon R</option>
                            <option value="ALTO">Alto</option>
                            <option value="NANO">Nano</option>
            
                        </select>
                        
                    </td>
                    
                </tr>

                




                <tr>
                    <td>
                        
                    </td>

                    <td>
                        <input type="submit" id="submit" name="submit" onclick="completeform()">
                        
                    </td>
                    
                </tr>

                
            </table>


         

        </form>
    </div>

        
    </div>

    <!--booking form ended-->



    
    

    


  

<script src="js/autogen.js"></script>
<script src="js/main.js"></script>
<script src="js/booking.js"></script>
</body>
</html>