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
	 <title>Learning Notify || Best Platforms</title>
	 <link rel="stylesheet" type="text/css" href="style.css" 
	 media="screen">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
<div class="topnav">

        <a href="#"><i class="fa fa-fw fa-user"></i><?php echo $user_data['firstname']  .  $user_data['lastname'] ?></a>
		<a href="logout.php">
        <span style="font-size:0.9rem; float:right; color:black;">Logout</span>
		</a>
        <a href="http://localhost/IWT%20Repate/About.php">About</a>
	    <a href="http://localhost/IWT%20Repate/learningnotify.php">Home</a>
	</div>
	
	


<hgroup>
<img src="Images/logo2.png">
</hgroup>

<h1>Best Online Learning Platforms<h1>
<h3>Get accurate insights on the best online learning platforms – discover the best MOOCs by reading honest and genuine e-learning reviews!<h3>
</header>

<div class="container" style="height:850px">
<table>
    <tr>
      <th>Provider</th>
	  <th>Certificate</th>
	  <th>Scores</th>
	  <th>         </th>
	  

    </tr>
	
	<tr>
	  <td><img src="Images/udacity.png" alt="datacamp" width="160px" height="50px"></td>
	  <td>Free</td>
	  <td>9.6</td>
		  <td><a href = "https://www.udacity.com/?gclid=EAIaIQobChMIweOO5_OP8AIVSaaWCh38PQamEAAYASAAEgLi5vD_BwE&utm_campaign=920638067_c&utm_keyword=udacity_e&utm_medium=ads&utm_source=gsem_brand&utm_term=63844644663_in" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;"  class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	<tr>
	  <td><img src="Images/datacamp.png" alt="datacamp" width="160px" height="80px"></td>
	  <td>Free</td>
	  <td>9.6</td>
		  <td><a href = "https://www.datacamp.com/?tap_a=5644-dce66f&tap_s=996511-26cec2&utm_medium=affiliate&tm_subid1=60805d8d479222.87295126" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	
	<tr>
	  <td><img src="Images/index.png" alt="udemy" width="160px" height="80px"></td>
	  <td>Free</td>
	  <td>9.4</td>
		  <td><a href = "https://www.udemy.com/?ranMID=39197&ranEAID=gsKJn8GIv3Q&ranSiteID=gsKJn8GIv3Q-EfF6Bg20Rat.LUKlyMhgBA&LSNPUBID=gsKJn8GIv3Q&utm_source=aff-campaign&utm_medium=udemyads" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	
	<tr>
	  <td><img src="Images/edx.png" alt="udemy" width="160px" height="80px"></td>
	  <td>Paid</td>
	  <td>9.4</td>
		  <td><a href = "https://www.edx.org/" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	<tr>
	  <td><img src="Images/coursera.png" alt="udemy" width="160px" height="80px"></td>
	  <td>Paid</td>
	  <td>9.4</td>
		  <td><a href = "https://www.coursera.org/in" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	<tr>
	  <td><img src="Images/linkedin.png" alt="udemy" width="160px" height="80px"></td>
	  <td>Free</td>
	  <td>9.4</td>
		  <td><a href = "https://www.linkedin.com/learning/subscription/topics?src=go-pa&veh=sem_src.go-pa_c.LLS-C_APAC_All_IN_Search_Google-Brand_DR-PRS_Broad_LIL-HeadTerm-Alpha_All_English_Core-MKAG_pkw.linkedin%20learning_pmt.e_pcrid.428931010990_pdv.c_plc._trgid.aud-901151931749:kwd-310582843911_net.g_learning&trk=sem_src.go-pa_c.LLS-C_APAC_All_IN_Search_Google-Brand_DR-PRS_Broad_LIL-HeadTerm-Alpha_All_English_Core-MKAG_pkw.linkedin%20learning_pmt.e_pcrid.428931010990_pdv.c_plc._trgid.aud-901151931749:kwd-310582843911_net.g_learning&mcid=6626616148786065459&cname=&camid=9764329640&asid=102279866120&targetid=aud-901151931749:kwd-310582843911&crid=428931010990&placement=&dev=c&ends=1&gclid=EAIaIQobChMI8IPFzvCP8AIV3r2WCh2EXwMzEAAYASAAEgJOt_D_BwE&gclsrc=aw.ds" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	<tr>
	  <td><img src="Images/codecademy.png" alt="udemy" width="160px" height="80px"></td>
	  <td>Free</td>
	  <td>9.4</td>
		  <td><a href = "https://www.codecademy.com/?g_network=g&g_device=c&g_adid=507599948342&g_keyword=codecademy&g_acctid=243-039-7011&g_adtype=search&g_adgroupid=128133970988&g_keywordid=kwd-296880846182&g_campaign=INTL_Brand_Phrase&g_campaignid=12575778360&utm_id=t_kwd-296880846182:ag_128133970988:cp_12575778360:n_g:d_c&utm_term=codecademy&utm_campaign=CA_Brand_Core_Exact&utm_source=google&utm_medium=paid-search&utm_content=507599948342&hsa_acc=2430397011&hsa_cam=12575778360&hsa_grp=128133970988&hsa_ad=507599948342&hsa_src=g&hsa_tgt=kwd-296880846182&hsa_kw=codecademy&hsa_mt=p&hsa_net=adwords&hsa_ver=3&gclid=EAIaIQobChMIpPvJ8PGP8AIVRK2WCh1gXQdDEAAYASAAEgJP6PD_BwE" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
	
	<tr>
	  <td><img src="Images/BitDegree.jpg" alt="udemy" width="160px" height="80px"></td>
	  <td>Free</td>
	  <td>9.4</td>
		  <td><a href = "https://www.bitdegree.org/" target="_blank">  
		  <button style="border: none; outline: 0; padding: 12px; color: white; background-color: #bf00ff; text-align: center; cursor: pointer; width: 100%; font-size: 18px;" class="btn">Visit Site <i class="fa fa-arrow-circle-right"></i></button></a></td>
	</tr>
</table>

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