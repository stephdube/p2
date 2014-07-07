<?php
	require('dictionary.php');
	
	$password = '';

	if (array_key_exists("word_count", $_POST)){

		// grab as many words as requested from the word list at random indexes
		for ($i=0; $i<$_POST["word_count"]; $i++){
			if ($i==0){
				// no need for spaces etc. before first word
				$password .=$words[rand(0, count($words) - 1)];
			}
			else {
				switch($_POST["separate"]){
					case "space":
						$password .= ' '.$words[rand(0, count($words) - 1)];
						break;
					case "dash":
						$password .= '-'.$words[rand(0, count($words) - 1)];
						break;
					case "camel":
						$password .= ucwords($words[rand(0, count($words) - 1)]);
						break;
					default: 
						$password .= $words[rand(0, count($words) - 1)];
				}
			}
			
		}

		// capitalize the first letter of each word
		if (array_key_exists("caps", $_POST)){
			$password = ucwords($password);
		}

		// add a random number between 0 and 9
		switch($_POST["number"]){
			case "rand":
				$password = substr_replace($password, rand(0, 9), 
				rand(0, strlen($password)), 0);					
				break;
			case "start":
				$password = substr_replace($password, rand(0, 9), 0, 0);
				break;
			case "end":
				$password = substr_replace($password, rand(0, 9), 
				strlen($password), 0);
				break;
			default:;
		}

		// add a random special character  somewhere in the password
		$specials = array('!', '@', '#', '$', '%', '^', '&', '*');
		switch($_POST["special"]){
			case "rand":
				$password = substr_replace($password, $specials[rand(0, count($specials))], rand(0, strlen($password) - 1), 0);			
				break;
			case "start":
				$password = substr_replace($password, $specials[rand(0, count($specials))], 0, 0);
				break;
			case "end":
				$password = substr_replace($password, $specials[rand(0, count($specials))], 
				strlen($password), 0);
				break;
			default:;
		}
	}
