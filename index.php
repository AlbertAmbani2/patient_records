
<?php
include_once('patient_records/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Patient Records System </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <header id="menu-jk" class="text-light">
    
        <div id="nav-head" class="header-nav" style="background-color:#0093A7">
            <div class="container">
                <div class="row">
                    <div  style="font-weight:bold; font-size:24px; margin-top: 1% !important; left:10px;">
                    <img src='assets/images/logo.jpeg' style="float: left;width:80px; height:80px;border-radius: 5px;left:5px;"/>
                    Patient Records System
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="navbar-nav ml-auto d-none d-md-block nav-item">
                        <ul>
                               <li><a href="#" style="color:white;">Home</a></li>
                               <li><a href="#logins" style="color:white;">Logins</a></li>  
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                
            <div> 
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/homepage/home2.jpg" alt="Homepage">
                      
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown" style="color:white;">Kitui Refferal Hospital</h5>
            
                         
                    
                    </div>
              
                </div>
                
            </div>
           
        </div>


    </div>
    
  <!--  ************************* Logins ************************** -->
    
    
  <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Logins</h2>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="patient_records/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 blog-smk">
                        <div class="blog-single">

                                <img src="assets/images/admin-login.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>
                    
                                <a href="patient_records/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                    

                    
                    
                </div>
            </div>
            
        </div>
    </section> 

    
    <div class="copy">
            <div class="container">
            Patient Records System
                
     
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>