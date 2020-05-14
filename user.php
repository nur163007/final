<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "supermarket";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])){
	 $myid = $_POST['id'];
	 $myname = $_POST['name'];
	 $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      $mymobile = $_POST['mobile'];
      $myemail = $_POST['email'];
      $mydateofbirth = $_POST['dateofbirth'];
      $myaddress = $_POST['address'];
      $mycity = $_POST['city'];
      $mystate = $_POST['state'];
      $mycountry = $_POST['country'];
	  $sql ="INSERT INTO admin (id, name, username,password,mobile,email,dateofbirth,address,city,state,country) VALUES ('$myid','$myname', '$myusername', '$mypassword', '$mymobile', '$myemail', '$mydateofbirth', '$myaddress', '$mycity', '$mystate', '$mycountry')";

	  
if($conn->query($sql) === TRUE){
$error = "Information Recorded successfully";
}
else {
$error = "This data already exists";
}
}
$conn->close();
?>
			<html lang="en">
			  <head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="shortcut icon" href="favicon.png"/>
                
				<!-- Bootstrap CSS -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|PT+Sans:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

				
				
				<link rel="stylesheet" href="style.css">
				<link rel="stylesheet" href="userstyle.css">
				<title>Cash Receipt</title>
			  </head>
			  <body>
				<!--navbar part start-->
				<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="logo.png" alt="not found"></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.html">HOME</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about1.html">ABOUT US</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        ADMINISTRATION
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="user.php">ADD NEW SYSTEM USER</a>
        <a class="dropdown-item" href="customer.php">ADD NEW CUSTOMER</a>
        <a class="dropdown-item" href="product.php">ADD PRODUCT</a>
        <a class="dropdown-item" href="#">ADD PRODUCT TYPE</a>
        <a class="dropdown-item" href="#">ADD STOCK</a>
        <a class="dropdown-item" href="#">ADD SELL</a>
      </div>
    </li>
	<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        REPORTS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">SYSTEM USER REPORTS</a>
        <a class="dropdown-item" href="#">CUSTOMER REPORTS</a>
        <a class="dropdown-item" href="#">PRODUCT REPORTS</a>
        <a class="dropdown-item" href="#">PRODUCT TYPE REPORTS</a>
        <a class="dropdown-item" href="#">STOCK REPORTS</a>
        <a class="dropdown-item" href="#">SELL REPORTS</a>
      </div>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#">MY ACCOUNT</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="login.php">LOGOUT</a>
    </li>
  </ul>
  </div>
</nav>
</div>

				<!--navbar part end-->
				
				
				<!--content part start-->
				<div class="container">
				<header class="about_part" style = "background-color:#A9F5A9;">
				<div class="row">
				<div class="col-lg-12">
				<div class="head_mid">
				</div>
				</div>
				</div>
				</header>
				</div>
				
				<div class="container">
				<section class="service_part" style = "background-color:#E1F5A9;">
				
				<div class="row">
				<div class="col-lg-6">
				<div class="ser_heading text-center">
				<h2>ADMIN REGISTRATION FORM</h2>
				</div>
				<div class="row ser_main ">
				<div class="container">
				
				
         <div style = "width:450px; border: solid 1px #333333; background-color:#A9E2F3; margin-bottom:15px;" align = "left" >
            <div style = "background-color:rgba(0,0,0,0.85); color:#FFFFFF; padding:3px;"><b>Registration</b></div>
            <div style = "margin:30px">
			<div style = "font-size:20px; color:red; margin-top:10px" align="center"><?php echo $error; ?></div><br>
			<div class="imgcontainer">
             <img src="registration.png" alt="Avatar" class="avatar">
             </div>
               
               <form action ="" method = "post" >
               
               <input type = "text" name = "id"  placeholder="ID" required><br />
               <input type = "text" name = "name"  placeholder="NAME" required><br />
               <input type = "text" name = "username"  placeholder="USERNAME" required><br />
                <input type = "password" name = "password"  placeholder="PASSWORD" required><br/>
                <input type = "text" name = "mobile"  placeholder="MOBILE" required><br/>
                <input type = "email" name = "email"  placeholder="E-MAIL" required><br/>
                <input type = "text" name = "dateofbirth"  placeholder="DATE OF BIRTH" required><br/>
                <input type = "text" name = "address"  placeholder="ADDRESS LINE" required><br/>
                <input type = "text" name = "city"  placeholder="CITY" required><br/>
                <input type = "text" name = "state"  placeholder="STATE" required><br/>
                <input type = "text" name = "country"  placeholder="COUNTRY" required><br/>
                  <input type = "submit" name="submit" value="Submit">
                  <input type = "submit" name="reset" value="Reset">
				  
				  </form>
               
					
            </div>
				
         </div>
			
      </div>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="ser_heading text-center">
				<h2 align="center">ADVERTISEMENT</h2>
				</div>
				<section class="advertise_part2">
				
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="advertise1.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise2.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise3.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise4.jpg" class="d-block w-100" alt="not found">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
<section class="advertise1_part">
				
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="advertise5.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise6.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise7.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise8.jpg" class="d-block w-100" alt="not found">
    </div>
	<div class="carousel-item">
      <img src="advertise9.jpg" class="d-block w-100" alt="not found">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
				</div>
				</div>
				
				
				
				
				</section>
				
				</div>
				
				
				
				<!--content part end-->
				
				<!-- footer part start -->
				<footer id="footer-part">
				
				<div class="footer-top">
				<div class="container">
				<div class="row">
				<div class=" col-md-3 col-sm-6 col-xs-12 segment-one">
				<h3>DIVINECTOR</h3>
				<p>customer service assistant's duties and responsibilities can include guiding customers 
				to the items they need</p>
				</div>
				<div class=" col-md-3 col-sm-6 col-xs-12 segment-two">
				<h2>Program</h2>
				<ul>
				<li><a href="#">Event</a></li>
				<li><a href="#">Support</a></li>
				<li><a href="#">Hosting</a></li>
				<li><a href="#">Carier</a></li>
				<li><a href="#">Blog</a></li>
				</ul>
				</div>
				<div class=" col-md-3 col-sm-6 col-xs-12 segment-three">
				<h2>Follow us</h2>
				<p>Please follow us on our social media profile in order to keep updated</p>
				<a href="https://web.facebook.com/profile.php?id=100005137066726"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/explore"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/nur.mohd1996/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<div class=" col-md-3 col-sm-6 col-xs-12 segment-four">
				<h2>Our Newletter</h2>
				<p>To know about us more please subscribe</p>
				<form action="">
				<input type="email" name="email">
				<input type="submit" value="Subcribe">
				</form>
				</div>
				
				</div>
				
				</div>
				
				</div>
				
				<p class="footer-buttom-text">© Copyright 2020. All Rights Reserved by Nur mohammad</p>
				
				</footer>
				<!-- footer part end -->
				<!-- Optional JavaScript -->
			   <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
				
			  </body>
			</html>
			
			