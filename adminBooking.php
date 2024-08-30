
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="src/admins.css">
</head>
<body>
<h3>You can go to the Home page <a href="main.php" style="color:red;">Click</a></h3>


    <div class="admin">
        <div class="admin-logo">
            <img src="img/log.png " width="300px">
            <h1>Admin<br>
            <h2>Cutomer Details</h2></h1>
           
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
        <table >
            <tr>
                <th>C_ID</th>
                <th>F_Name</th>
                <th>L_Name</th>
                <th>Email</th>
                <th>P_Number</th>
                <th>B_Date</th>
                <th>D_Time</th>
                <th>P_Location</th>
                <th>D_Location</th>
                <th>T_Type</th>
                <th>Hours</th>
                <th>Desti(km)</th>
                <th>passenger</th>
                <th>V_type</th>
                <th>Price</th>
                <th>Modify</th>
            </tr>

            <?php
                 include 'config.php';

                $sql = "SELECT * FROM booking";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['customer_id'] . "</td>" .
                 "<td>" . $row['f_name'] . "</td>" .
                 "<td>" . $row['l_name'] . "</td>" .
                 "<td>" . $row['email'] . "</td>" .
                 "<td>" . $row['p_number'] . "</td>" .
                 "<td>" . $row['b_data'] . "</td>" .
                 "<td>" . $row['b_time'] . "</td>" .
                 "<td>" . $row['p_location'] . "</td>" .
                 "<td>" . $row['d_location'] . "</td>" .
                 "<td>" . $row['t_type'] . "</td>" .
                 "<td>" . $row['hourses'] . "</td>" .
                 "<td>" . $row['destination'] . "</td>" .
                  "<td>" . $row['passenger'] . "</td>" .
                   "<td>" . $row['v_type'] . "</td>" .
                    "<td>" . $row['price'] . "</td>" .
                     "<td>".
                     "<button onclick='location.href=".'"editbooking.php?id='. $row['customer_id'] .'"'."'>Edit</button> &nbsp;".
                     "<button onclick='deleteRecord(".$row['customer_id'].")'>Delete</button>"."</td>"."</tr>";
                }
                }
?>
 

        </table>
    </div>

    <!-- delet function strted -->
<script>
    function deleteRecord(id) {
        
        result = confirm('Are You Sure want to delete this record?');
        if(result){
            window.location.href = "deletbooking.php?id="+id;
        }
        else{
            alert('Record is not deleted');
        }
    }
</script>
    
</body>
</html>