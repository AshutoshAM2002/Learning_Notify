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
	 <title>Learning Notify || Tutorials</title>
	 <link rel="stylesheet" type="text/css" href="style1.css" 
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
		
        <a href="file:///C:/xampp/htdocs/IWT%20Repate/About.html">About</a>
	    <a href="http://localhost/IWT%20Repate/learningnotify.php">Home</a>
	</div>
	

<hgroup>
<img src="Images/logo2.png">
</hgroup>

<h1>Tutorials<h1>
<h3>Everything you've been wondering about online learning platforms is answered here - the most in-depth MOOC-related tutorial directory. Browse various relevant topics covered by our e-learning experts & make your online learning fruitful. Here, you'll find all the answers you need for fast skill development!<h3>
<div class="input-filter">
		 <input type="text" name="" id="myFilter" class="filter" placeholder="Search for courses" onkeyup="searchProduct()"> 
         </div>

</header>

<div class="conatiner">
         
		 
		 <div class="card-lists" id="idcard-lists">
		    <div class="row" id="myItems">
			  <div class="card">
			    <img src="Images/index.jpg" alt="image" width="233" height="200">
				  <div class="card-body">
				    <h4 class="card-title">Python for Data Science</h4>
					<p style="margin:0 0 0 10px;">This introduction to Python will kickstart your learning of Python for data science, as well as programming in general. This beginner-friendly Python course will take you from zero to programming in Python in a matter of hours.</p>
					<br>
					<a href="https://cognitiveclass.ai/courses/python-for-data-science" 
					 target="_blank" style="text-decoration:None; color:#996600; font-size:17px; float:right; margin:0 10px 10px 0;">Enroll now</a>
				  </div>
			  </div>
			  
			   <div class="card">
			    <img src="Images/index.png" width="233" height="200">
				  <div class="card-body">
				    <h4 class="card-title">JavaScript Ultimate Course</h4>
					<p style="margin:0 0 0 10px;">Learn the Javascript essentials for web development or any type of programming. Learn all the basics of Javascript including primitive types, arrays, functions, assignment operators, the window object and much more.</p>
					<br>
					<a href="https://www.udemy.com/course/javascript-essentials/?LSNPUBID=JVFxdTr9V80&ranEAID=JVFxdTr9V80&ranMID=39197&ranSiteID=JVFxdTr9V80-kuuKr.f2MdidPOJbEeGj.Q&utm_medium=udemyads&utm_source=aff-campaign" 
					 target="_blank" style="text-decoration:None; color:#996600; font-size:17px; float:right; margin:0 10px 10px 0;">Enroll now</a>
				  </div>
			  </div>
			  
			  
			  <div class="card" >
			    <img src="Images/C program.png" alt="image" width="233" height="200">
				  <div class="card-body">
				    <h4 class="card-title">C++ Ultimate Course</h4>
					<p style="margin:0 0 0 10px;">You will learn how to write your first program, design an app using conditionals and logic, and understand how to use vectors to keep your data organized. There are plenty of interactive activities, quizzes, notes, and lectures to keep you busy as you progress through each module.</p>
					 <a href="https://www.codecademy.com/courses/learn-c-plus-plus/lessons/cpp-hello-world/exercises/introduction" 
					 target="_blank" style="text-decoration:None; color:#996600; font-size:17px; float:right; margin:0 10px 10px 0;">Enroll now</a>
				  </div>
			  </div>
			  
			  
			  <div class="card" >
			    <img src="Images/java.png" alt="image" width="233" height="200">
				  <div class="card-body">
				    <h4 class="card-title">Java (Basic) Certificate</h4>
					<p style="margin:0 0 0 10px;">It will cover basic topics in Java language such as classes, data structures, inheritance, exception handling, etc. You are expected to be proficient in either Java 7 or Java 8.</p>
					<br>
					<br>
					<br>
					 <a href="https://www.hackerrank.com/certificates/17de665b9f0e" 
					 target="_blank" style="text-decoration:None; color:#996600; font-size:17px; float:right; margin:0 10px 10px 0;">Enroll now</a>
				  </div>
			  </div>
			  
			  
			  			  <div class="card" >
			    <img src="Images/database.jpg" alt="image" width="233" height="200">
				  <div class="card-body">
				    <h4 class="card-title">Databases and SQL Querying</h4>
					<p style="margin:0 0 0 10px;">This is an introductory course on Databases and SQL Querying. There are no pre-requisities for this course. If you are looking to get acquainted with the concept of Databases and Queries.</p>
					 <br>
					 <br>
					 <a href="https://www.udemy.com/share/101qVACUIccFlQQH0=/" 
					 target="_blank" style="text-decoration:None; color:#996600; font-size:17px; float:right; margin:0 10px 10px 0;">Enroll now</a>
				  </div>
			  </div>
			  
			  
			</div>
		 </div>
</div>


<div class="footer">
  <div class="footer-content">
    <div class="footer-section About">
	<img src="Images/logo2.png" style="width:125px; height:125px; ">
	<p>
	Our mission is simple we want to help people find the best online learning
    platforms that correspond with their personal needs, aims, and values.
   
	</p>
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
<script src="app.js"> </script>
<style>
* {
  box-sizing: border-box;
}

.filter{
	width:500px;
	height:40px;
    border-radius:5px;
	
	
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
