<?php

// Get the user id
$id = $_REQUEST['id'];

// Database connection
$connection = mysqli_connect("localhost", "root","", "learningnotify_db");

if ($id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($connection, "SELECT firstname,
	lastname FROM users WHERE id='$id'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$firstname = $row["firstname"];

	// Get the last name
	$lastname = $row["lastname"];
}

// Store it in a array
$result = array("$firstname", "$lastname");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>