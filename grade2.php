<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Grade Calculator</title>
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
						<h2>Grade Calculator</h2>
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
<?php

    $hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
    $hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
    $hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q1 = substr(filter_input(INPUT_POST, 'q1', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q2 = substr(filter_input(INPUT_POST, 'q2', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q3 = substr(filter_input(INPUT_POST, 'q3', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q4 = substr(filter_input(INPUT_POST, 'q4', FILTER_SANITIZE_NUMBER_INT),0,3);
    $q5 = substr(filter_input(INPUT_POST, 'q5', FILTER_SANITIZE_NUMBER_INT),0,3);
    $exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);

    $grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam1)/425)*100;

    echo "<p>Current course grade is " . round($grade,0);

    if($grade >= 90){
        echo "%, which is an A.";
    }elseif($grade >= 80){
        echo "%, which is a B.";
    }elseif($grade >= 70){
        echo "%, which is a C.";
    }elseif($grade >= 60){
        echo "%, which is a D.";
    }else{
        echo "%, which is an E.";
    }
    



?>
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