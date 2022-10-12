<?php

session_start();

if(isset($_SESSION['learningnotify_db_userid']))
{
	$_SESSION['learningnotify_db_userid'] = NULL;
      unset($_SESSION['learningnotify_db_userid']);
}
header("Location: login.php");

die;


?>