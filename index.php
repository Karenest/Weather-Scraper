<?php

	if (array_key_exists('email', $_POST) OR (array_key_exists('password', $_POST)) {
		
		if ($_POST['email'] == "") {
			
			echo "<p>Email address is required.</p>";
		} else if ($_POST['password'] == ""){
			
			echo "<p>Password is required.</P>";
		}
		
		}
	
	$link = mysqli_connect("shareddb-i.hosting.stackcp.net", "myusers-33375cb4", "nico2425", "myusers-33375cb4");
	
	if (mysqli_connect_error()) {
		
		die ("There was an error connecting to the database");
		
	}  
	
	
	
	


?>

<form method = "post">

	<input name="email" type="text" placeholder="email address">
	
	<input name="password" type="password" placeholder="password">
	
	<input type="submit" value="Sign up!">


</form>