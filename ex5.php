<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>PHP Example #5</title>
</head>

<body>

<?php
	$gpa = 3.1;
	$major = "Computer Information Systems";
	
	if ($gpa > 3.2 or $major == "Computer Information Systems" or $major == "Cisco")
	{
		echo "<p>You are eligible for the scholarship.</p>";
		$amount = 500;
	}
?>
     
</body>
</html>