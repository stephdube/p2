<!DOCTYPE html>
<html>
	<head>
		<?php require('password_logic.php');?>
		<link rel="stylesheet" type="text/css" href="/passwordstyle.css">
</script>
	</head>
	<body>
		<h1>Password Generator</h1>
		<div class="container">
			<form method="POST" action="index.php">
				How many words? <select name="word_count" class="select">
					<?php for ($i = 1; $i < 10; $i++):?>
						<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php endfor;?>
				</select><br>
				Separate words?<select name="separate" class="select">
					<option value="none">no</option>
					<option value="space">with spaces</option>
					<option value="dash">with-dashes</option>
					<option value="camel">withCamelCase</option>
				</select><br>
				Include a number?<select name="number" class="select">
					<option value="no">no</option>
					<option value="start">at beginning</option>
					<option value="end">at end</option>
					<option value="rand">anywhere</option>
				</select><br>
				Inlude a special symbol?<select name="special" class="select">
					<option value="no">no</option>
					<option value="start">at beginning</option>
					<option value="end">at end</option>
					<option value="rand">anywhere</option>
				</select><br>
				Capitalize first letter in words?<input type="checkbox" name="caps"> <br><br>
				<input type="submit" value="Submit" class="input"/>
			</form>
		</div>
		<?php if($password != ''):?>
			<h2>Your password:</h3>
			<div class="container">
				<p id="pass"><b><?php echo $password?></b></p>
			</div>
		<?php endif;?>
	</body>
	<footer>
		By Stephanie Dube (7/2014) for <a href="http://dwa15.com/">DWA-15</a>
	</footer>
</html>