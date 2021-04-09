<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Javascript Quiz</title>
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

		<script>
        	function checkAnswer(b){
            	if(b == 1){
            	    alert("Correct!");
            	}else{
                	alert("Incorrect!");
           		 }
        	}
    	 </script>
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
						<h2>Javascript Quiz</h2>
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
				<span>Press the button to the left or below each possible answer to check if it is the right answer.</p>

				<span>1. JavaScript and Java are the same programming language, just different ways of calling/naming/describing it.</p>
				<button type="button" onclick="checkAnswer(0);">A</button>
				<span>True</p>
				<button type="button" onclick="checkAnswer(1);">B</button>
				<span>False</p>

				<span>2. Which of the following is the modulus mathematical symbol in JavaScript?</p>
				<button type="button" onclick="checkAnswer(0);">A</button>
				<span>mod</p>
				<button type="button" onclick="checkAnswer(0);">B</button>
				<span>modulus</p>
				<button type="button" onclick="checkAnswer(1);">C</button>
				<span>%</p>
				<button type="button" onclick="checkAnswer(0);">D</button>
				<span>*</p>
				<button type="button" onclick="checkAnswer(0);">E</button>
				<span>None of the above</p>

				<span>3. What tags are used to include JavaScript inside the &lt;body&gt; of an HTML file?</p>
				<button type="button" onclick="checkAnswer(1);">A</button>
				<span>&lt;script&gt;&lt;/script&gt;</p>
				<button type="button" onclick="checkAnswer(0);">B</button>
				<span>&lt;jscript&gt;&lt;/jscript&gt;</p>
				<button type="button" onclick="checkAnswer(0);">C</button>
				<span>&lt;jsscript&gt;&lt;/jsscript&gt;</p>
				<button type="button" onclick="checkAnswer(0);">D</button>
				<span>None of the above</p>

				<span>4. Which JavaScript command displays a popup alert box when coded withing JavaScript (not inside HTML or an HTM onclick)?</p>
				<button type="button" onclick="checkAnswer(0);">A</button>
				<span>box.alert</p>
				<button type="button" onclick="checkAnswer(0);">B</button>
				<span>alert.box</p>
				<button type="button" onclick="checkAnswer(0);">C</button>
				<span>window.box</p>
				<button type="button" onclick="checkAnswer(1);">D</button>
				<span>window.alert</p>
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