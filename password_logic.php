<?php
date_default_timezone_set('America/New_York');

	require('dictionary.php');
	
	$password = '';

	// grab as many words as requested from the word list at random indexes
	for ($i=0; $i<$_POST["word_count"]; $i++){
		$password .= ' '.$words[rand(0, count($words) - 1)];
	}

	// capitalize the first letter of each word
	if (array_key_exists("caps", $_POST)){
		$password = ucwords($password);
	}

	// add a random number between 0 and 9 somewhere in the password
	if (array_key_exists("number", $_POST)){
		$password = substr_replace($password, rand(0, 9), 
			rand(0, strlen($password) - 1), 0);
	}

	// add a random special character  somewhere in the password
	if (array_key_exists("special", $_POST)){
		$specials = array('!', '@', '#', '$', '%', '^', '&', '*');
		$password = substr_replace($password, 
			$specials[rand(0, count($specials) - 1)], 
			rand(0, strlen($password) - 1), 0);
	}

