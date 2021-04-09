<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>PHP Example #2</title>
</head>

<body>

   <?php
        $numOne = mt_rand(1,12);
        $numTwo = mt_rand(1,12);
        $product = $numOne * $numTwo;
        Echo "<p>Random times table example: " . $numOne . " * " . $numTwo . " = " . $product . "</p>";
   ?>
     
</body>
</html>