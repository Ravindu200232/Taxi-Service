<?php
include 'config.php';

$id =$_GET['id'];


$sql ="SELECT * FROM payment WHERE payment_id='$id'";

$Cardtype="";
$Cardname="";
$Cardnumber="";
$Cardmonth="";
$Cardyear="";
$Cardcvv="";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $Cardtype=$row['card_type'];
        $Cardname=$row['card_name'];
        $Cardnumber=$row['card_number'];
        $Cardmonth=$row['card_month'];
        $Cardyear=$row['card_year'];
        $Cardcvv=$row['card_cvv'];


    }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/editpayement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form method = "post" action="updatepayment_process.php">
          
            <div class="row">
              
    
              <div class="devide">

                  <h3>Update Payment</h3>
                    

                 <label for="cname">Payment_ID</label>
                 <input type="text" id="pindex" name="pindex" value="<?php
                        echo $id;?>"readonly="readonly">

                    <label>Card Type</label>
                        <select name="crd-type" id="crd-type" value="<?php
                        echo $Cardtype;?>">
                            <option value="none" <?php if ($Cardtype == 'none') echo 'selected'; ?>>Select card</option>
                            <option value="visa" <?php if ($Cardtype == 'visa') echo 'selected'; ?>>Visa</option>
                            <option value="americaex" <?php if ($Cardtype == 'americaex') echo 'selected'; ?>>American Express</option>
                            <option value="discover" <?php if ($Cardtype == 'discover') echo 'selected'; ?>>Discover</option>

                        </select> 

                 <label for="cname">Name on Card</label>
                 <input type="text" id="cname" name="cardname" value="<?php
                        echo $Cardname;?>">

                 <label for="ccnum">Credit card number</label>
                 <input type="text" id="ccnum" name="cardnumber" value="<?php
                        echo $Cardnumber;?>">

                 <label for="expmonth">Exp Month</label>
                 <input type="text" id="expmonth" name="expmonth" value="<?php
                        echo $Cardmonth;?>">

                

                  <div class="devide">

                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" value="<?php
                        echo $Cardyear;?>">

                  </div>

                  <div class="devide">

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" value="<?php
                        echo $Cardcvv;?>">

                  </div>

                

              </div>
              
            </div>

            
            <input type="submit" id="checker" name="checker" value="Update">
          </form>
        </div>
      </div>
        
      </div>
    </div>
    
</body>
</html>