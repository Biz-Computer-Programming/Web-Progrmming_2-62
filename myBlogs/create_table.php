<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create a Table</title>
</head>
<body>
<?php //create_table.php

	if ($dbc = @mysqli_connect('localhost', 'root','', 'mydatabase')) {

		$query = 'CREATE TABLE entries (id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
										title VARCHAR(100) NOT NULL,
										entry TEXT NOT NULL,
										date_entered DATETIME NOT NULL
										) CHARACTER SET utf8';

	
		if (@mysqli_query($dbc, $query)) {
			print '<p>The table has been created!</p>';
		} else {
			print '<p style="color: red;">Could not create the table because:<br>' . 
			mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
		}

		mysqli_close($dbc);

	} else {
		print '<p style="color: red;">Could not connect to the database:<br>' . 
		mysqli_connect_error() . '.</p>';
	}
?>
</body>
</html>