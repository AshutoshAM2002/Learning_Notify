<?php


session_start();

   include("classes/connect.php");
   include("classes/login.php");
   include("classes/user.php");
   
   if(isset($_SESSION['learningnotify_db_userid']) && is_numeric($_SESSION['learningnotify_db_userid']))
   {
   $id = $_SESSION['learningnotify_db_userid'];
   $login = new Login();
   
   $result = $login->check_login($id);
   
   if($result)
   {
	   
   $user = new User();
   $user_data = $user->get_data($id);
   
   if(!$user_data)
   {
	   header("Location: login.php");
   die;
	   
   }
   
   }else
   {
   header("Location: login.php");
   die;
   }
   
   
   
   }else
   {
   header("Location: login.php");
   die;
   }
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <title>Learning Notify || Latest Courses</title>
	 <link rel="stylesheet" type="text/css" href="style.css" 
	 media="screen">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
<div class="topnav">
        <a href="logout.php">
        <span style="font-size:0.9rem; float:right; color:black;">Logout</span>
		</a>
        <a href="#"><i class="fa fa-fw fa-user"></i><?php echo $user_data['firstname']  .  $user_data['lastname'] ?></a>
		
        <a href="http://localhost/IWT%20Repate/About.php">About</a>
	    <a href="http://localhost/IWT%20Repate/learningnotify.php">Home</a>
	</div>
	


<hgroup>
<img src="Images/logo2.png">
</hgroup>

<h1>Latest Free Courses<h1>
<h3>Here is the courses that are free for limited time<h3>

</header>

<div class="row">

<div id="column">
	 <div class="card">
	 <img src="Images/5.jpg" width="233" height="200">
	 <h3> Future Skills offering free certifiction<br>Cloud Security Essentials Course by AWS</h3>
	 <a href="https://futureskillsprime.edcast.com/pathways/copy-of-copy-of-cloud-security-essentials-course-by-aws" target="_blank"><button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;">Enroll now</button></a>
	 
	</div>
  </div>
  
  <div id="column">
	 <div class="card">
	 <img src="Images/Cyber_Security-Foundation-Professional-Certificate-CSFPC_CertiProf.png" width="233" height="200">
	 <h3> Centiprof offering free certifiction<br>Cyber Security Foundation - CSFPC™</h3>
	 <a href="https://certiprof.com/pages/cyber-security-foundation-csfpc" target="_blank"><button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;">Enroll now</button></a>
	 
	 </div>
	 </div>
	 
	 <div id="column">
	 <div class="card">
	 <img src="Images/index.jpg" width="233" height="200">
	 <br>
	 <br>
	 <h3> Python 2021:Complete Python Bootcamp:Zero-Hero Programming</h3>
	 <a href="https://certiprof.com/pages/cyber-security-foundation-csfpc" target="_blank"><button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;">Enroll now</button></a>
	 </div>
	 </div>
	 
	 
	 <div id="column">
	 <div class="card">
	 <img src="Images/machine.jpg" width="233" height="200">
	 <br>
	 <br>
	 <h3> Machine Learning & Deep Learning in Python & R</h3>
	 <br>
	 <a href="https://www.udemy.com/share/103hJQCUIccFlQQH0=/" target="_blank"><button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;">Enroll now</button></a>
	 </div>
	 </div>
	 
	 
</div>
<hr>

<div class="footer">
  <div class="footer-content">
    <div class="footer-section About">
	<img src="Images/logo2.png" style="width:125px; height:125px; ">
	<!--<p>
	Our mission is simple we want to help people find the best online learning
    platforms that correspond with their personal needs, aims, and values.
    There are thousands of e-learning reviews on the Internet, but how can you
    be sure they are honest and trustworthy?
	</p>-->
	<div class="contact">
	<span><i class="fa fa-phone"></i> &nbsp; 123-456-789</span>
	<span><i class="fa fa-envelope"></i> &nbsp; XYZ@gmail.com</span>
	<div class="socials">
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-instagram"></i></a>
	<a href="#"><i class="fa fa-twitter"></i></a>
	
	</div>
	</div>
	</div>
	
    <div class="footer-section links">
	<h3 style="float:left;">Quick Links</h3>
	<br>
	<br>
	<br>
	<br>
	<ul>
	  <a href="http://localhost/IWT%20Repate/learningnotify.php"><li>Home</li></a>
	  <a href="http://localhost/IWT%20Repate/BestPatform.php#"><li>Best Platform</li></a>
	  <a href="http://localhost/IWT%20Repate/Latestfreecourses.php"><li>Latest Free Courses</li></a>
	  <a href="http://localhost/IWT%20Repate/Tutorial.php"><li>Tutorial</li></a>
	  <a href="#"><li>Terms and conditions</li></a>
	</ul>
	</div>
	<div class="footer-section contact-form">
	<h3 style="float:left;">Contact us</h3>
	<br>
	<br>
	<br>
	<br>
	<form action="index.html" method="post">
	 <input type="email" class="text-input contact-input" placeholder="Your email address">
	 <br>
	 <textarea name="message" class="text-input contact-input"placeholder="Your message"></textarea>
	 <br>
	 <button type="submit" class="btn btn-big">
	 <i class="fa fa-envelope"></i>
	 Send
	 </button>
	
	 </form>
	</div>
	
  <div class="footer-bottom">
  &copy; learningnotify | Designed by Ashutosh Mahajan
  </div>
  </div>
  </div>


	
  
  </body>
  </html>
  
  <style>
  * {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 100%;
  padding: 10px;
  height: 600px;
  background-image: url('Images/business-code-coding-943096.jpg');
  background-repeat: no-repeat;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}  
  .footer{
	background:#303036;
	color:#d3d3d3;
	height:400px;
	position:relative;
	margin-top:40px;
  }
	.footer .footer-bottom{
		width:100%;
		background:#343a40;
		color:#686868;
		height:50px;
		text-align:center;
		position:absolute;
		bottom:0px;
		left:0px;
		padding-top:20px;
	}
		.footer .footer-content{

			height:350px;
			display:flex;
			
		}
		.footer .footer-content .footer-section{
			flex:1;
	
			padding:25px;
			
		}
		.footer .footer-content h1,
		.footer .footer-content h2{
			color:white;
			
		}
		.footer .footer-content .About .contact span{
			display:block;
			font-size:1.1em;
			margin-bottom:8px;
		}
		.footer .footer-content .About .socials a{
			border: 1px solid gray;
			width:45px;
			height:41px;
			padding-top:5px;
			margin-right:5px;
			text-align:center;
			display:inline-block;
			font-size:1.3em;
			border-radius:5px;
			
			
		}
		.footer .footer-content .links ul a{
			display:block;
			margin-bottom:10px;
			font-size:1.2em;
			color:white;
			text-decoration:none;
		}
		.footer .footer-content .contact-form .contact-input{
			background:#272727;
			color:#bebdbd;
			margin-bottom:10px;
			line-height:1.5em;
			padding:0.7em 1.2em;
			border:none;
			
		}
		.footer .footer-content .contact-form .contact-input:focus {
			background:#1a1a1a;
		}
		
  </style>