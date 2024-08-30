
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="src/admins.css">
</head>
<body>
<h3 style>You can go to the Home page <a href="main.php" style="color:red;">Click</a></h3>
    <div class="admin">
        <div class="admin-logo">
        <img src="img/log.png " width="300px">
            <h1>Admin<br>
            <h2>Driver Details</h2></h1>
        </div>

        <div>
            <button><a href="adminDriver.php">Driver Details</a></button>
            <button ><a href="adminBooking.php">Customer Details</a></button>
            <button><a href="adminPayment.php">Payment</a></button>
            <button><a href="adminAccout.php">Register Details</a></button>
            <button><a href="admincontac.php">Contact Details</a></button>
        </div>
    </div>

    <div class="admin-table-Driver">
        <table border='1' colospaeb>
            <tr>
                <th>D_ID</th>
                <th>D Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Work Time</th>
                <th>Working Distrinct</th>
                <th>Modify</th>
            </tr>

            <?php
                include 'config.php';

                $sql = "SELECT * FROM driver";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['D_no'] . "</td>" .
                 "<td>" . $row['driver_name'] . "</td>" .
                  "<td>" . $row['driver_email'] . "</td>" .
                   "<td>" . $row['driver_pnumber'] . "</td>" .
                    "<td>" . $row['driver_wtime'] . "</td>" .
                     "<td>" . $row['driver_wdistric'] . "</td>".
                     "<td>".
                     "<button onclick='location.href=".'"editDriver.php?id='. $row['D_no'] .'"'."'>Edit</button> &nbsp;".
                     "<button onclick='deleteRecord(".$row['D_no'].")'>Delete</button>"."</td>"."</tr>";
                }
                }
?>
<!-- delet function strted -->
<script>
    function deleteRecord(id) {
        
        result = confirm('Are You Sure want to delete this record?');
        if(result){
            window.location.href = "deletDrive.php?id="+id;
        }
        else{
            alert('Record is not deleted');
        }
       
    }
</script>
 

        </table> 
    
</body>
</html>