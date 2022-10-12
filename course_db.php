<?php

// Get the user id
$course_name = $_REQUEST['course_name'];

// Database connection
$connection = mysqli_connect("localhost", "root","", "learningnotify_db");
	
	

if ($course_name !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($connection, "SELECT course_name,details,
	img_path,course_url FROM course3 WHERE course_name='$course_name'");
	
	


	$row = mysqli_fetch_array($query);

	// Get the first name
	$course_name = $row["course_name"];
	$details = $row["details"];

	// Get the last name
	$img_path= $row["img_path"];
	
	$course_url = $row["course_url"];
	
	
}

// Store it in a array
$result = array("$course_name", "$details", "$img_path", "$course_url");
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>