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
                <form action="grade2.php" method="post">
                    <table>
                        <tr>
                            <td>Homework #1</td>
                            <td><Input type="number" name="hw1" min="0" max="77"></td>
                        </tr>
                        <tr>
                            <td>Homework #2</td>
                            <td><Input type="number" name="hw2" min="0" max="77"></td>
                        </tr>
                        <tr>
                            <td>Homework #3</td>
                            <td><Input type="number" name="hw3" min="0" max="85"></td>
                        </tr>
                        <tr>
                            <td>Quiz 1</td>
                            <td><Input type="number" name="q1" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td>Quiz 2</td>
                            <td><Input type="number" name="q2" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td>Quiz 3</td>
                            <td><Input type="number" name="q3" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td>Quiz 4</td>
                            <td><Input type="number" name="q4" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td>Quiz 5</td>
                            <td><Input type="number" name="q5" min="0" max="20"></td>
                        </tr>
                        <tr>
                            <td>Exam 1</td>
                            <td><Input type="number" name="exam1" min="0" max="115"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Submit" class="centercell"></td>
                        </tr>
                    </table>
                </form>
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