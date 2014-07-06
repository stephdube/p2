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
		</div>
		<h2>Your password:</h3>
		<div class="container">
			<b><?php echo $password?></b>
		</div>
	</body>
</html>