<?php

	session_start();
	
	if ($SESSION['email']) {
	
	echo "You are logged in!";
	
	} else {
		
		header("Location: index.php");
	}

?>