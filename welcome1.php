<html>
	<head>
		<title> welcome message</title>
		
	</head>
	<body>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
			
			<input type="text" name="name" />
			<input type="submit" name="save" value="SAVE" />
		</form>
		
		<?php
		$name = $_POST['name'];
		echo "Welcome to the Web Engineering Course: Mr/Mrs ".$name;
		
		
		
		?>
</html>