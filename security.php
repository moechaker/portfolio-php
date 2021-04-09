<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Security News</title>
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
		<!-- Table CSS -->
		<style>
			.table1 table {
				font-family: arial, sans-serif; border-collapse: collapse; width: 100%;
			}
			.table1 td, .table1 th {
				border: 1px solid #dddddd; text-align: left;
				padding: 8px;
			}
			.table1 th { 
				background-color: #0143ad; color: white;
			}
			.table1 tr:nth-child(even) {
				background-color: #c3d7f7; 
			}
			.image-responsiveness{
				max-width: 100%;
				height: auto;
			}
		</style>
		<!-- Javascript Chart -->
		<script src="js/mybarchart.js"></script>
		<script src="js/canvasjs.min.js"></script>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
		<?php include('menu.php'); ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">d
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Security News</h2>
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
        		<p>
					<img src="img/security.jpg" alt="image of lock representing Cybersecurity">
				</p>
				<h4>Major Security Breaches</h4>
				<table class="table1">
					<tr>
						<th>Breach</th>
						<th>Date</th> 
						<th>Impacted Users</th>
					</tr>
					<tr>
						<td>Microsoft</td>
						<td>December 2019</td> 
						<td>44,000,000</td>
					</tr>
					<tr>
						<td>Facebook</td>
						<td>September 2019</td> 
						<td>419,000,000</td>
					</tr>
					<tr>
						<td>Marriot Hotels</td>
						<td>November 2018</td> 
						<td>383,000,000</td>
					</tr>
					<tr>
						<td>Twitter</td>
						<td>May 2018</td> 
						<td>330,000,000</td>
					</tr>
					<tr>
						<td>MyFitnessPal</td>
						<td>May 2018</td> 
						<td>150,000,000</td>
					</tr>
				</table>
				<br>
				<div id="chartContainer" style="height: 450px; width: 95%; "></div>
				<p>Source: <a href="https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/">https://informationisbeautiful.net/visualizations/worlds-biggest-data-breaches-hacks/</a></p>
				
				<h4>Phishing</h4>
				<p>Phishing is the attempt to obtain sensitive information such as usernames, passwords, and credit card details (and sometimes, indirectly, money), often for malicious reasons, by masquerading as a trustworthy entity in an electronic communication. (Source: <a href="https://en.wikipedia.org/wiki/Phishing">Wikipedia</a>)</p>

				<h4>How to identify phishing:</h4>
				<ul>
				<li>Email or web site indicates that urgent action required</li>
				<li>Email has generic greeting</li>
				<li>A hyperlink that is just text such as Click Here where you cannot see the actual destination web address</li>
				<li>Contains spelling mistakes</li>
				<li>Seeks personal information</li>
				</ul>

				<h4>Five Common uses of encryption:</h4>
				<ol>
					<li>Web browsing</li>
					<li>Passwords</li>
					<li>Hard drives</li>
					<li>Wifi traffic</li>
					<li>USB drive</li>
				</ol>

				<h4>Security Tips:</h4>
				<ol>
					<li>Use multi-factor authentication</li>
					<li>Use 10 or more characters for passwords</li>
					<li>Use different password for each web site</li>
				</ol>

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