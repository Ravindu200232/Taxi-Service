<?php
include 'config.php';

$id =$_GET['id'];


$sql ="SELECT * FROM booking WHERE customer_id='$id'";

$Fname="";
$Lname="";
$Email="";
$Pnumber="";
$Bdata="";
$Btime="";
$Plocation="";
$Dlocation="";
$Ttype="";
$Hourse="";
$Destination="";
$Passenger="";
$Vtype="";
$Price="";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $Fname=$row['f_name'];
        $Lname=$row['l_name'];
        $Email=$row['email'];
        $Pnumber=$row['p_number'];
        $Bdata=$row['b_data'];
        $Btime=$row['b_time'];
        $Plocation=$row['p_location'];
        $Dlocation=$row['d_location'];
        $Ttype=$row['t_type'];
        $Hourse=$row['hourses'];
        $Destination=$row['destination'];
        $Passenger=$row['passenger'];
        $Vtype=$row['v_type'];
        $Price=$row['price'];


    }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="src/booking.css">
    
    
    <link rel="stylesheet" href="src/all.min.css">

    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
   

    
</head>
<body>


    
        
        

        
        <!--booking-form-->
    <div class="booking-form-div">
        <form class="booking-form" method = "post" action="updatebooking_process.php">
            <h1 class="form-head-text">Update Ride Details</h1>

            <br><br>

            <table class="form-fill" >

                <tr>
                    <td><h3>Contact Details</h3>

                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td><label>Customer_ID</label>
                        <br><br>
                        <input type="text" name="CID" id="CID" value="<?php echo $id; ?>" readonly="readonly">

                        
                    </td>

                    <td>
                    </td>

                </tr>



                <tr>
                    <td><label>FIRST NAME</label>
                        <br><br>
                        <input type="text" id="fname" name="fname" value="<?php
                        echo $Fname;?>">
                        
                    </td>

                    <td><label>LAST NAME</label>
                        <br><br>
                        <input type="text" id="lname" name="lname" value="<?php
                        echo $Lname;?>">
                        
                    </td>

                </tr>


                <tr>
                    <td>
                        <label>E-MAIL ADDRESS</label>
                        <br><br>
                        <input type="email" id="email" name="email" value="<?php
                        echo $Email;?>">
                        
                    </td>

                    <td><label>PHONE NUMBER</label>
                        <br><br>
                        <input type="number" id="pnumber" name="pnumber" value="<?php
                        echo $Pnumber;?>">
                        
                    </td>
                    
                </tr>

                

                <tr>
                    <td><h3>Ride Details</h3>

                    </td>
                    <td>

                    </td>
                </tr>


                <tr>
                    <td>
                        <label>PICKUP DATE</label>
                        <br><br>
                        <input type="date" name="Bdate" id="Bdate" value="<?php
                        echo $Bdata;?>">
                        
                    </td>

                    <td><label>PICKUP TIME</label>
                        <br><br>
                        <input type="time" name="Btime" id="Btime" value="<?php
                        echo $Btime;?>">
                        
                    </td>
                    
                </tr>


                <tr>
                    <td>
                        <label>PICKUP LOCATION </label>
                        <br><br>
                        <input type="text" id="Plocation" name="Plocation" value="<?php
                        echo $Plocation;?>">
                        
                    </td>

                    <td><label>DROP-OFF-LOCATION</label>
                        <br><br>
                        <input type="text" id="Dlocation" name="Dlocation" value="<?php
                        echo $Dlocation;?>">
                        
                    </td>
                    
                </tr>


                <tr>
                    <td>
                    <label>TRANSFER TYPE</label>
                    <br><br>
                    <select name="Tra-type" id="Tra-type">
                        <option value="one-way" <?php if ($Ttype == 'one-way') echo 'selected'; ?>>One Way</option>
                        <option value="return" <?php if ($Ttype == 'return') echo 'selected'; ?>>Return</option>
                    </select>

                        
                    </td>

                    <td>
                    <label>EXTRA TIME</label>
                    <br><br>
                    <select id="hours" name="hours"></select>
                    </td>
                    
                </tr>

                <tr>
                    <td>
                    <label>DISTANCE TO DESTINATION (KM)</label>
                    <input type=text name="dkm" id="dkm" value="<?php
                        echo $Destination;?>">
                    </td>
                </tr>

                <tr>
                    <td><h3>Choose a Vehicle</h3>

                    </td>
                    <td>

                    </td>
                </tr>


                <tr>
                    <td>
                        <label>PASSENGERS</label>
                        <br><br>
                        <select name="pacount" id="pacount"></select>
                    </td>

                    <td><label>Select Vehicle</label>
                        <br><br>
                        <select name="vType" id="VType">
                            <option value="KDH" <?php if ($Vtype == 'KDH') echo 'selected'; ?>>KDH High Roof</option>
                            <option value="KDHFlat" <?php if ($Vtype == 'KDHFlat') echo 'selected'; ?>>KDH Flat Roof</option>
                            <option value="ALLION" <?php if ($Vtype == 'ALLION') echo 'selected'; ?>>Allion</option>
                            <option value="AXIO" <?php if ($Vtype == 'AXIO') echo 'selected'; ?>>Axio</option>
                            <option value="PRIUS" <?php if ($Vtype == 'PRIUS') echo 'selected'; ?>>Prius</option>
                            <option value="WAGONR" <?php if ($Vtype == 'WAGONR') echo 'selected'; ?>>Wagon R</option>
                            <option value="ALTO" <?php if ($Vtype == 'ALTO') echo 'selected'; ?>>Alto</option>
                            <option value="NANO" <?php if ($Vtype == 'NANO') echo 'selected'; ?>>Nano</option>
                        </select>

                        
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        <label>Price</label>
                        <br><br>
                        <input type="text" name="price" id="price" value="<?php echo $Price; ?>">
                        
                    </td>

                    <td>
                        
                    </td>
                    
                </tr>

                




                <tr>
                    <td>
                        
                    </td>

                    <td>
                        <input type="submit" id="submit" name="submit" value="Update">
                        
                    </td>
                    
                </tr>

                
            </table>


         

        </form>
    </div>

        
    

    <!--booking form ended-->
    

    

<script>
    for (var i = 1; i <= 24; i++) {
        var select = document.getElementById("hours");
        var option = document.createElement("OPTION");
        select.options.add(option);
        option.text = i;
        option.value = i;
        

        if (i == <?php echo $Hourse; ?>) {
            option.selected = true;
        }
    }

    for (var i = 1; i <= 26; i++) {
        var select = document.getElementById("pacount");
        var option = document.createElement("OPTION");
        select.options.add(option);
        option.text = i;
        option.value = i;
        

        if (i == <?php echo $Passenger; ?>) {
            option.selected = true;
        }
    }

</script>
  

    
<script src="js/main.js"></script>

</body>
</html>


