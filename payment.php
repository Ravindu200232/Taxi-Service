<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/paymentses.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form method="post" action="payment_process.php">
          
            <div class="row">
              
    
              <div class="devide">

                  <h3>Payment</h3>
                    <label for="fname">Accepted Cards</label>
                    <input type="hidden" id="myInput" name="Pno" value="">

                    <div class="icon-container">
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>

                    
                    <label>Card Type</label>
                        <select name="crd-type" id="crd-type">
                            <option value="none">Select card</option>
                            <option value="visa">visa</option>
                            <option value="americaex">American Express</option>
                            <option value="discover">Discovery</option>
                        </select> 

                 
                 <label for="cname">Name on Card</label>
                 <input type="text" id="cname" name="cardname" placeholder="Ravindu">

                 <label for="ccnum">Credit card number</label>
                 <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                 <label for="expmonth">Exp Month</label>
                 <input type="text" id="expmonth" name="expmonth" placeholder="01">

                

                  <div class="devide">

                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2028">

                  </div>

                  <div class="devide">

                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">

                  </div>

                

              </div>
              
            </div>

            <label>
              <input type="checkbox" checked="checked" name="Shipping" id="check"> Shipping address same as billing
            </label>
            <input type="submit" id="checker" name="checker">
          </form>

          <br><br><a href="booking.php">Back</a>
        </div>
      </div>
        
      </div>
    </div>


  
    
</body>

<script src="js/autogen.js"></script> 
</html>