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
						<h2>Rock Paper Scissors Game</h2>
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

    $humanChoice = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);
    $computerChoice = rand(1,3);

    if($humanChoice == 1){
        echo "<p><img src=\"img/rock1.png\" alt=\"Rock\">&nbsp";
    }elseif($humanChoice == 2){
        echo "<p><img src=\"img/paper1.png\" alt=\"Paper\">&nbsp";
    }else{
        echo "<p><img src=\"img/scissors1.png\" alt=\"Scissors\">&nbsp";
    }

    if($computerChoice == 1){
        echo "<img src=\"img/rock2.png\" alt=\"Rock\"></p>";
    }elseif($computerChoice == 2){
        echo "<img src=\"img/paper2.png\" alt=\"Paper\"></p>";
    }else{
        echo "<img src=\"img/scissors2.png\" alt=\"Scissors\"></p>";
    }

    if($humanChoice == $computerChoice){
        echo "<p>It's a draw</p>";
    }elseif($humanChoice == 1 and $computerChoice == 2){
        echo "<p>You lose!</p>";
    }elseif($humanChoice == 1 and $computerChoice == 3){
        echo "<p>You Win!</p>";
    }

    if($humanChoice == 2 and $computerChoice == 1){
        echo "<p>You Win!</p>";
    }elseif($humanChoice == 2 and $computerChoice == 3){
        echo "<p>You Lose!</p>";
    }

    if($humanChoice == 3 and $computerChoice == 1){
        echo "<p>You Lose!</p>";
    }elseif($humanChoice == 3 and $computerChoice == 2){
        echo "<p>You Win!</p>";
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