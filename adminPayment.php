
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
            <h2>Payment Details</h2></h1>
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
                <th>Payment_ID</th>
                <th>Card Type</th>
                <th>Card Name</th>
                <th>Card Number</th>
                <th>Expire Month</th>
                <th>Expire Year</th>
                <th>CVV</th>
                <th>Modify</th>
            </tr>

            <?php
                 include 'config.php';

                $sql = "SELECT * FROM payment";

                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row['payment_id'] . "</td>" .
                 "<td>" . $row['card_type'] . "</td>" .
                  "<td>" . $row['card_name'] . "</td>" .
                   "<td>" . $row['card_number'] . "</td>" .
                   "<td>" . $row['card_month'] . "</td>" .
                    "<td>" . $row['card_year'] . "</td>" .
                     "<td>" . $row['card_cvv'] . "</td>".
                     "<td>".
                     "<button onclick='location.href=".'"editpayment.php?id='. $row['payment_id'] .'"'."'>Edit</button> &nbsp;".
                     "<button onclick='deleteRecord(".$row['payment_id'].")'>Delete</button>"."</td>"."</tr>";
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
            window.location.href = "deletpayment.php?id="+id;
        }
        else{
            alert('Record is not deleted');
        }
    }
</script>
    
</body>
</html>