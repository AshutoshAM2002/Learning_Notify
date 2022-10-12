<?php
 include("classes/connect.php");
 include("classes/signup.php");
 
 $firstname = "";
 $lastname = "";
 $email = "";
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	 $signup = new Signup();
	 $result = $signup->evaluate($_POST);
	 
	 if($result != "")
	 {
		 echo "<div style='text-align:center;font-size:12px;colour:white;background-color:grey;'>";
		 echo "The following errors occured<br>";
	 echo $result;
	 echo "</div>";
	 }else
	   {
		   header("Location: learningnotify.php");
		   die;
	   }
	 
	  $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
	 
 }
 
 





?>
<html>
<head>
	 <title>Learning Notify | Sign up</title>
	 <link rel="stylesheet" type="text/css" href="style.css" media="screen">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  <header>
         <a href="http://localhost/IWT%20Repate/login.php"><button class="button3">Log in</button></a>
		 <div class="bar">		

		 <hgroup>
             <img src="Images/logo2.png">
            </hgroup>
			</div>
			
</header>
			<div class="container">
			
			<div class="bg-img1">
			<div class="container1">
			<form method="post" action="">
			
			<h4><strong>Sign up</strong></h4>
			<label for="email"><b>Firstname</b></label>
			<input value="<?php echo $firstname ?>" name="firstname" type = "text" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="firstname"><br><br>
			<label for="email"><b>Lastname</b></label>
			<input value="<?php echo $lastname ?>" name="lastname"  type = "text" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="lastname"><br><br>
			<label for="email"><b>Email</b></label>
			<input value="<?php echo $email ?>" name="email"  type = "text" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="Email"><br><br>			
			<label for="email"><b>password</b></label>
			<input name="password"  type="password" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="Password"><br><br>
			<label for="email"><b>Re-Enter Password</b></label>
			<input name="password2" type="password" id="text" style="height:40px; width:300px; border-radius:4px; border:solid 1px #888;font-size:14px;" placeholder="Password"><br><br>
			
			<input type="Submit" id="button2"style="width:300px; height:40px; border-radius:4px; font-weight:bold;background-color:#bf00ff; color:white;" value="Sign up">
			</form>
			</div>
			</div>
			</div>
  </body>
</html>