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
				</select></br>
				Include a number? <input type="checkbox" name="number"><br>
				Inlude a special symbol? <input type="checkbox" name="special"><br>
				Capitalize first letter in words?<input type="checkbox" name="caps"> <br><br>
				<input type="submit" value="Submit" class="input"/>
			</form>
		</div>
		<h2>Your password:</h3>
		<div class="container">
			<p id="pass"><b><?php echo $password?></b></p>
		</div>
	</body>
	<footer>
		By Stephanie Dube (7/2014) for <a href="http://dwa15.com/">DWA-15</a>
	</footer>
</html>