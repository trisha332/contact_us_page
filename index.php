<?php
require('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
require('../fixed_navber/index1.php');


 ?>
    
    <div class="masthead">
   <div class="color-overlay d-flex justify-content-center align-items-center">
    <h1> Contact Us</h1>
   </div>

    </div>
    <div class="container contact-form">
            
        <form method="post" class="pt-3">
            <h3>Drop Us a Message</h3>
           <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-2">
                        <input type="text" name="c_name" class="form-control" placeholder="Your Name *" value="" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="c_email" class="form-control" placeholder="Your Email *" value="" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="c_phonenumber" class="form-control" placeholder="Your Phone Number *" value="" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="submit" name="ok" class="btnContact" value="Send Message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="c_message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['ok'])){
                $c_name=$_POST['c_name'];
                $c_email=$_POST['c_email'];
                $c_phonenumber=$_POST['c_phonenumber'];
                $c_message=$_POST['c_message'];
                $src="SELECT c_email FROM contact_table WHERE c_email='$c_email'";
                $rs=mysqli_query($con, $src);
                if(mysqli_num_rows($rs)>0){
                    ?>
                    <div class="alert alert-danger">
                        You are already registered
                    </div>
                    <?php
                }else{
                    $sql="INSERT INTO contact_table (c_name, c_email, c_phonenumber,c_message) VALUES ('$c_name','$c_email','$c_phonenumber','$c_message')";
                    $res=mysqli_query($con, $sql);
                    if($res==1){
                        ?>
                        <div class="alert alert-success">
                            Registration is successfull
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">
                            Registration is unsuccessfull
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
<!-- footer -->

<footer class="footer-distributed">
    <div class="footer-left">
        <h2>Soner <span>Hasel</span></h2>
   
    <p class="footer-links">
        <a href="../slider/index.php">Home</a>
        |
        <a href="../about us/index.php">About</a>
        |
        <a href="../contact us/index.php">Contact</a>
        
    </p>
    <p class="footer-company-name">Copyright © 2021 <strong>Soner Hasel</strong> All rights reserved </p>
</div>
<div class="footer-center">
    <div>
        <i class="fa fa-phone"></i>
        <p>+91 7501179463</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">sonerhasel78@gmail.com</a></p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">facebook</a></p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">instagram</a></p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">Twiter</a></p>
    </div>
</div>
    <div class="footer-right">
        <p class="footer-company-about">
           <span>About the company</span>
           <strong>Soner Hasel</strong> is authentic Bengali Restaurant where you can find authentic Bengali food item.</p>
        <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        

       

    </div>

    
</div>
    
</footer>
                         <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  
</html>
</body>