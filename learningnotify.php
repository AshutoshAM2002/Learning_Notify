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
	 <title>Learning Notify</title>
	 <link rel="stylesheet" type="text/css" href="style.css" 
	 media="screen">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>

<div class="topnav" style="font-size:17px;">
        <a href="logout.php">
        <span style="font-size:0.9rem; float:right; color:black;">Logout</span>
		</a>
        <a href="#" ><i class="fa fa-fw fa-user"></i><?php echo $user_data['firstname']  .  $user_data['lastname'] ?></a>
        <a href="http://localhost/IWT%20Repate/About.php">About</a>
	    <a href="file:///C:/xampp/htdocs/IWT%20Project/Learning%20Notify.html">Home</a>
		
		
		
		
	</div>
	


<hgroup>
<img src="Images/logo2.png">
</hgroup>

<h1>Get free certifications online<h1>
<h3>Score your dream job in the IT sector with free certificates of completion<h3>

</header>

<a href="http://localhost/IWT%20Repate/Latestfreecourses.php" target="_blank"><button class="button1"> <span>Latest Free Courses </span></button></a>
<a href="http://localhost/IWT%20Repate/Tutorial.php" target="_blank"><button class="button1"> <span>Tutorial </span></button></a>
<a href="http://localhost/IWT%20Repate/BestPatform.php#" target="_blank"><button class="button1"> <span>Best Platforms </span></button></a>
<hr>
<br>
<br>


<h2 style="font-size:30px;margin:20px;text-align:center;"> Why you should obtain free certifications online? </h2>
<br>
<h3>Our certificates of completion will help you stay ahead of the game: with online certificates you'll be able to prove your<br>professional growth to anyone.</h3>


<div class="row">
  <div class="column">
   <h2 style="color:white; margin:200px 300px 0 0;font-size:40px;">Helping Find the Best<br> MOOCs</h2> 
   <p style="color:white; margine:200px 200px 0 0;font-size:20px;">Our mission is simple: we want to help people find the best online learning<br>
   platforms that correspond with their personal needs, aims, and values.<br>
   There are thousands of e-learning reviews on the Internet, but how can you<br>
   be sure they are honest and trustworthy?<br>
   Integrity is vital when you’re evaluating and reviewing something that has to<br> 
   do with something as fundamental as education. We are here to help you<br>
   decide which online course platforms are the most impressive in the market<br> 
   by evaluating dozens of different aspects and executing a detailed analysis – \<br>
   all to provide you with an accurate and genuine verdict.</p>
  </div>
</div>

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



  
