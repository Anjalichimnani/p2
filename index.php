<html>
	<head>
		<title>Dynamic Web Development - xkcd Password Generator</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<center>

			<?php error_reporting(E_ALL);      			# Report Errors, Warnings, and Notices ?>
			<?php ini_set('display_errors', 1); 		# Display errors on page (instead of a log file) ?>

			<?php require ('logic.php')?>
			
			<h1>xkcd Password Generator </h1><br>
			
			
				"Once an exhaustive password search begins, the most important factor is password length!" <br>
			<p>
				The important thing to take away from the comic is that longer passwords are better because each additional character adds much more time to the breaking of the password. That's what Randall is trying to get through here. Complexity does not matter unless you have length in passwords. Complexity is more difficult for humans to remember, but length is not.
			</p>

			<h1><?=$password?></h1>
			<form method='POST' action='index.php'>
				<h2>Enter Number of Words
				<input type='text' name='words_number'></h2>										<!-- Number of Words in the password-->
				<h3><input type='checkbox' name='need_number'>Add Number<br>						<!-- Does the User Require Number-->
				<input type='checkbox' name='need_special'>Add Special Character</h3><br>			<!-- Does the User Require Special Character-->

				<input type='submit' value='Generate me the pasword'><br>
			</form>
			
			<img src="img/xkcd_password.png"></img>
			
		</center>
	</body>
</html>