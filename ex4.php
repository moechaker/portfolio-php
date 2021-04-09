<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>PHP Example #4</title>
</head>

<body>

    <?php
        $partno = 234091;
        $quantity = 1050;
        if ($partno == 234091 and $quantity > 1000)
        {
            echo "<p>Discount available</p>";
            echo "<p><a href=\"http://www.amazon.com/\">Order now</a></p>";
        }
        else
        {
            echo "<p>Discount not available</p>";
            echo "<p><a href=\"http://www.bestbuy.com/\">Call for pricing</a></p>";
        }
    ?>
     
</body>
</html>