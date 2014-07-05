<?php
	error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
	ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
	<head>
		<?php require('password_logic.php');?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
	</head>
	<body>
		<form method="POST" action="index.php">
			How many words: <select name="word_count">
				<?php for ($i = 1; $i < 10; $i++):?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
				<?php endfor;?>
			</select></br>
			Include numerical: <input type="checkbox" name="number"><br>
			Inlude special symbol: <input type="checkbox" name="special"><br>
			First letters capitalized:<input type="checkbox" name="caps"> <br>
			<input type="submit" value="Submit">
		</form>

		Your password:<b> <?php echo $password?></b>
	</body>
</html>