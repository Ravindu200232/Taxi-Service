<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MR TAXI || Contact</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/all.min.css">
    <link rel="stylesheet" href="src/contac.css">
    <script src="https://kit.fontawesome.com/3df7eb2b0c.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    
</head>
<body>

<!--header section started-->
    <div class="main-container">
        <div class="blackground-text">
            <h2>book <span>can now</span></h2>
        </div>
        <header class="header">
            <a href="#" id="logo"><img src="img/logo.png" alt="logo" id="logo-img"></a>
            <nav class="navbar">
                <a href="main.php">Home</a>
                <a href="ourFleets.php">Our Fleets</a>
                <a href="package.php">Packages</a>
                <a href="driver.php">Driver</a>
                <a href="about.php">About Us</a>
                <a href="contac.php">Contact Us</a>
                <a href="login.php">log in</a>
            </nav>

            <a href="#" id="menu-bars" class="fas fa-bars"></a>

           
        </header>
        <div class="text-image">
            <img src="img/carmain.png" alt="text-img">
        </div>
    </div>
    <!--header section ended-->

<!--contac section stared-->

    <div class="Contac">
        
        <h2 id="Contac-head-text">CONTACT INFORMATION</h2>
        <br><br>
        <h1 id="Contac-h1">Get in Touch with Us<br><span id="Contac-line"> | </span></h1>

        <div class="lnner-Contac">
          

            <div class="Contac-content">
                
                <div class="inner-Contac-text">
                    <form method="post" action="contac_process.php">
                        <h1>Get in touch</h1>
                        <h2>We would love to hear from you.Get in to puch with us by email.</h2>
                        <br><br>

                       
                        <input type="hidden" id="myInput" name="Cno" value="">

                        <label>Name</label>
                        <br><br>
                        <input type="text" id="Cname" name="Cname" class="Cform-text">
                        <br><br>
                        <label>Email Address</label>
                        <br><br>
                        <input type="text" id="Cemail" name="Cemail" class="Cform-text">
                        <br><br>
                        <label>Your Message</label>
                        <br><br>
                        <textarea cols="20" rows="4" id="Ymessage" name="Ymessage" class="Cform-text"></textarea>
                        <br><br><br>

                        <input type="submit" id="Csubmit" name="Csubmit">
                    </form>
                    
                    
                </div>    
                           
            </div>

            <div class="Contac-Hotline-conten">
                
                <div class="inner-Contac-Hotline-text">
                    <h1>Hotline</h1>

                    <div class="Hotline-line">
                        <div class="Hotline-content" id="h-1">
                            <h2>General Inquiries</h2>
                            <P>+94789840996</P>
                         </div>

                        <div class="Hotline-content">
                            <h2>Business Inquiries</h2>
                            <P>+94789840996<br>
                            <a href="#">business.inqure.lk</a></P>
                        </div>
                    </div>


                    <div class="Hotline-line">
                        <div class="Hotline-content" id="h-2">
                            <h2>Media & Marketing</h2>
                        <P><a href="#">Social.media.lk</a></P>
                        </div>

                        <div class="Hotline-content" >
                            <h2>Careers</h2>
                            <P><a href="#">carees.drive.lk</a></P>
                        </div>
                    </div>
                

                 <div class="Hotline-line">
                    <div class="Hotline-content" id="h-3"> 
                        <h2>Inquiries on Affiliations (Driver or Fleet Owner)</h2>
                        <P><a href="#">register.lk</a></P>
                    </div>

                 </div>
            
                    

                    
                    
                    
                </div> 
            </div>

            
        </div>

    </div>

    <!--contac section ended-->

     <!--google map extende started-->
     <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8112252.86827963!2d79.84999999999997!3d6.8833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1696479917833!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

    <!--google map extende ended-->

      <?php
    include "footer.php"

    ?>

     








<script src="js/autogen.js"></script>  
<script src="js/main.js"></script>
<script src="js/googlemap.js"></script>
</body>
</html>