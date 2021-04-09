<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Tuition Calculator</title>
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
						<h2>Tuition Calculator</h2>
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
    $residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
    $lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,2);
    $upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,2);
    $financialAid = substr(filter_input(INPUT_POST, 'financialAid', FILTER_SANITIZE_NUMBER_INT),0,1);

    if(($lower == "" and $upper == "") or ($lower == 0 and $upper == 0)){
        exit("Invalid input. You must entere at least 1 credit hour.<br><a href=\"javascript:history.go(-1)\">Go Back</a>");
    }

    if($residency == 1){
        $residency = "in-district";
        $tuition = ($lower * 101.5) + ($upper * 200) + (($lower + $upper) * 23) + 50 + 60;
    }

    if($residency == 2){
        $residency = "out-of-district";
        $tuition = ($lower * 177) + ($upper * 265) + (($lower + $upper) * 23) + 50 + 60;
    }

    if($residency == 3){
        $residency = "out-of-state";
        $tuition = ($lower * 257) + ($upper * 350) + (($lower + $upper) * 23) + 50 + 60;
    }

    $tuition = number_format((float)$tuition, 2, '.', '');

    if($financialAid == 1){
        $addressOne = "<br><a href=\"https://www.hfcc.edu/financial-aid\">https://www.hfcc.edu/financial-aid<a/>";
        $addressTwo = "<br><a href=\"https://www.hfcc.edu/tuition-and-payment/scholarships\">https://www.hfcc.edu/tuition-and-payment/scholarships<a/>";
        $addressThree = "<br><a href=\"https://www.hfcc.edu/steps/payment\">https://www.hfcc.edu/steps/payment<a/>";

        print "<h1>Tuition Calculator</h1>";
        print "Total $residency cost of $lower 100-200 credits hours and $upper 300-400 credits is $$tuition ";
        print "<br><br>Helpful web pages<br>";
        print $addressOne;
        print $addressTwo;
        print $addressThree;
    }else{
        print "<h1>Tuition Calculator</h1>";
        print "Total $residency cost of $lower 100-200 credits hours and $upper 300-400 credits is $$tuition ";
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