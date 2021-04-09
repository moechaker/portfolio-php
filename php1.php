<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Basic PHP Examples</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

		<!-- prism scripts -->
		<link href="css/prism.css" rel="stylesheet"> 
		<script src="js/prism.js"></script>
		<!-- end prism scripts -->

    </head>
    <body>
        
        <!--================Header Menu Area =================-->
		<?php include('menu.php'); ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Basic PHP Examples</h2>
						<!-- <div class="page_link">
							<a href="index.php">Home</a>
							<a href="portfolio.php">Portfolio</a>
						</div> -->
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Projects Area =================-->
        <section class="projects_area p_120">
        	<div class="container">

        		<h3>PHP Example #1: Basic PHP Output, Concatenation, and Built-In Function</h3>
<pre><code class="language-php">
&lt;?php
	echo "&lt;p>Hello World!&lt;/p>";
	echo "&lt;p>\"Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.\" - Linus Torvalds&lt;/p>";
	echo "&lt;p>Today is " . date("l m/d/o") . "&lt;/p>";
	echo "&lt;p>Go To &lt;a href=\"https://www.w3schools.com/css/\">W3Schools CSS Tutorial&lt;/a>&lt;/p>";
?>	
</code></pre>

				<p><a href="ex1.php">Run It Now</a></p>


				<h3>PHP Example #2: Simple Variables, Math, and a Function</h3>
<pre><code class="language-php">
&lt;?php
    $numOne = mt_rand(1,12);
    $numTwo = mt_rand(1,12);
    $product = $numOne * $numTwo;
    Echo "&lt;p>Random times table example: " . $numOne . " * " . $numTwo . " = " . $product . "&lt;/p>";
?>
</code></pre>

				<p><a href="ex2.php">Run It Now</a></p>


				<h3>PHP Example #3: Simple If Statement</h3>

<pre><code class="language-php">
&lt;?php
	$student_id=193812;
	if ($student_id == 193812) 
	{
		echo "&lt;p>You are a Senior.&lt;/p>";
		echo "&lt;p>Be sure to apply for graduation.&lt;/p>";
	}
	echo "&lt;p>This statement is not in the If statement&lt;/p>";
?>
</code></pre>

				<p><a href="ex3.php">Run It Now</a></p>

				<h3>PHP Example #4: Simple if-else statement with AND logical operator</h3>

<pre><code class="language-php">
&lt;?php
    $partno = 234091;
    $quantity = 1050;
    if ($partno == 234091 and $quantity > 1000)
    {
        echo "&lt;p>Discount available&lt;/p>";
        echo "&lt;p>&lt;a href=\"http://www.amazon.com/\">Order now&lt;/a>&lt;/p>";
    }
    else
    {
        echo "&lt;p>Discount not available&lt;/p>";
        echo "&lt;p>&lt;a href=\"http://www.bestbuy.com/\">Call for pricing&lt;/a>&lt;/p>";
    }
?>
</code></pre>

				<p><a href="ex4.php">Run It Now</a></p>

				<h3>PHP Example #5: Simple if-else statement with OR logical operator</h3>

<pre><code class="language-php">
&lt;?php
	$gpa = 3.1;
	$major = "Computer Information Systems";
	
	if ($gpa > 3.2 or $major == "Computer Information Systems" or $major == "Cisco")
	{
		echo "&lt;p>You are eligible for the scholarship.&lt;/p>";
		$amount = 500;
	}
?>
</code></pre>

				<p><a href="ex5.php">Run It Now</a></p>


        	</div>
        </section>
        <!--================End Projects Area =================-->
        
        <!--================Footer Area =================-->
		<?php include('footer.php'); ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>