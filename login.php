<?php

session_start();

   include("classes/connect.php");
   include("classes/login.php");
   
   $email = "";
   $password = "";
   
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
	   $login = new Login();
	   $result = $login->evaluate($_POST);
	   
	   if($result != ""){
		   echo"<div>";
		   echo"The following error occured<br>";
	   echo $result;
	   echo"</div>";
	   }else
	   {
		   header("Location: learningnotify.php");
		   die;
	   }
	   
	   
	   
   
   $email = $_POST['email'];
   $password = $_POST['password'];

   }
   


?>

<html>
<head>
	 <title>Learning Notify | Log in</title>
	 <link rel="stylesheet" type="text/css" href="style.css" media="screen">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  
     <header>
	 
	 <a href="http://localhost/IWT%20Repate/signup.php"><button class="button3">Sign Up</button></a>
		 <div class="bar">		
		 <hgroup>
             <img src="Images/logo2.png">
			 </hgroup>
	</header>
			</div>
			<div class="container">
			
			<div class="bg-img1">
			<div class="container1">
			<form method="post">
			
			<h4><strong>Log in</strong></h4>
			
			 <label for="email"><b>Email</b></label>
			<input name="email" value="<?php echo $email ?>" type = "text" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="Email"><br><br>
			<label for="email"><b>password</b></label>
			<input name="password" value="<?php echo $password ?>" type="password" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="Password"><br><br>
			
			<input type="Submit" id="button2"style="width:300px; height:40px; border-radius:4px; font-weight:bold;background-color:#bf00ff; color:white;" value="Log in">
			</form>
			</div>
			</div>
			</div>
  </body>
</html>