<?php
include 'config.php';

$id =$_GET['id'];




$ddname="";
$ddemail="";
$ddpnumber="";
$dddriverwtime="";
$dddriverwdisrict="";

$sql ="SELECT * FROM driver WHERE D_no='$id'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $ddname=$row['driver_name'];
        $ddemail=$row['driver_email'];
        $ddpnumber=$row['driver_pnumber'];
        $dddriverwtime=$row['driver_wtime'];
        $dddriverwdisrict=$row['driver_wdistric'];


    }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="src/editdrive.css">
   
   

    
</head>
<body>
  

        <!--drive-form-->
    <div class="drive-form-div">
        <form class="drive-form" method = "post" action="updatedriver_process.php">
            
            
            <table class="drive-table">

                <tr>
                    <td><h1 class="form-head-text">Update Driver Details</h1>

                    </td>



                    
                </tr>

                <tr>
                    <td>
                        <label>Index ID</label>
                        
                    </td>
                    <td>
                    <input type="text" id="Dno" name="Dno" value="<?php echo $id; ?>" readonly="readonly">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Name</label>
                        
                    </td>
                    <td>
                        <input type="text" id="Dname" name="Dname" value="<?php
                        echo $ddname;?>">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Email</label>
                        
                    </td>
                    <td>
                        <input type="email" id="Demail" name="Demail" value="<?php
                        echo $ddemail;?>">

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Phone Number</label>
                        
                    </td>
                    <td>
                        <input type="number" id="Dnumber" name="Dnumber" value="<?php
                        echo $ddpnumber;?>">

                    </td>
                </tr>

                


                <tr>
                    <td>
                        <label>Work Time</label>
                    </td>
                    <td>
                    <select id="workTime" name="workTime">
                        <option value="fullTime" <?php if ($dddriverwtime == 'fullTime') echo 'selected'; ?>>Full Time</option>
                        <option value="partTime" <?php if ($dddriverwtime == 'partTime') echo 'selected'; ?>>Part Time</option>
                    </select>

                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Working District</label>
                        
                    </td>
                    <td>
                        <input type="text" name="WDistance" id="WDistance" value="<?php
                        echo $dddriverwdisrict;?>">
                        
                        
                    </td>
                </tr>


                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <button id="regeister" name="regeister" value="Update">Update</button>
                        
                    </td>
                </tr>

               

                

             
            </table>

            

            <br><br>

            

         

        </form>
    </div>

        
   

    

    


  

    

</body>
</html>