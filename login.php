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
	 $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
	  $sql =("SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword' limit 1");
	  $result = $conn->query($sql);
	  
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("location: main.html");
    }
} else {
         $error = "Your Username or Password is invalid";
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
				<title>Cash Receipt</title>
			  </head>
			  <body>
				<!--navbar part start-->
				<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">
			  <img src="logo.png" alt="not found">
			  </a>
			  
				<div class="heading_left">
				<p class="p-0">GROCERY SHOP MANAGEMENT SYSTEM</p>
				</div>
				
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="about.html">ABOUT US</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="login.php">LOGIN</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#footer-part">CONTACT US</a>
				  </li>
				  
				</ul>
			  </div>
			  
			</nav>
</div><br><br>

				<!--navbar part end-->
				
				
				<!--content part start-->
				
				<div class="container" align = "right">
				
				
         <div style = "width:350px; border: solid 1px #333333; background-color:rgba(0,0,0,0.85); margin-bottom:15px;" align = "left" >
            <div style = "background-color:rgba(0,0,0,0.85); color:#FFFFFF; padding:3px;"><b>Login</b></div>
				<a href="https://web.facebook.com/profile.php?id=100005137066726"><i class="fa fa-facebook-square" aria-hidden="true"style="font-size:40px"></i></a>
                <a href="https://twitter.com/explore"><i class="fa fa-twitter-square" aria-hidden="true"style="font-size:40px"></i></a>
                <a href="https://www.instagram.com/nur.mohd1996/"><i class="fa fa-instagram" aria-hidden="true"style="font-size:40px"></i></a>
            <div style = "margin:30px">
			<div class="imgcontainer">
             <img src="login.png" alt="Avatar" class="avatar">
             </div>
               
               <form action ="" method = "post">
               
               <input type = "text" name = "username"  placeholder="USERNAME"/><br />
                <input type = "password" name = "password"  placeholder="PASSWORD" /><br/>
                  <input type = "submit" name="submit" value="Login">
				  <div style = "font-size:12px; color:red; margin-top:10px" align="center"><?php echo $error; ?></div>
				  <p1 style = "color:white;">Don't have an Account? <a href="user.php">Signup now</a></p1>
				  </form>
               
					
            </div>
				
         </div>
			
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
			
			