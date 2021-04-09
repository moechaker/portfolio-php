<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Domain Names and Web Hosting</title>
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
		<!-- Javascript Chart -->
		<script src="js/mypiechart.js"></script>
		<script src="js/canvasjs.min.js"></script>
		<!-- JQuery used for table filter -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/filter.js"></script>
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
						<h2>JavaScript and the Web Development Process</h2>
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
        		<h2>What is the web development process?</h2>
				<p>A web development process, or web design and development process, is a systematic process, or methodology, used to design and build web sites. Just as planning goes into the design of cars, buildings, or homes, so too is planning and design and development process required for web sites. A good process help ensure customer requirements are deliverd in a quality, timely and cost-effective manner.</p>

				<h2>SDLCs and Porject Management</h2>
				<p>The web design and development process can be thought of as a type of software development cycle (SDLC) and project management methodolgy. The waterfall model depicted below is a long-standing, traditional SDLC that is characterized by sequential steps. Agile is a newer method that is intended to more quickly respond to changing customer and product requirements using an incremental process with frequent releases and customer feedback.</p>

				<h3>Traditional Waterfall SDLC Methodology</h3>
				<p><img src="img/waterfall.png" alt="Waterfall SDLC" class="image-responsiveness"></p>
				<P>Source Wikipedia</P>

				<h3>Agile Methodology</h3>
				<p><img src="img/agile.png" alt="Agile Methodology" class="image-responsiveness"></p>

				<h4>Web Development Phases</h4>
				<div id="chartContainer" style="height: 450px; width: 95%; "></div>

				
				<br>
				<form action="search.php" method="get">
					<table>
						<tr>
							<th colspan="2">Search Sites</th>
						</tr>
						<tr>
							<td>Site to search:</td>
							<td>
								<select name="site">
									<option value="google">Google Web 
									<option value="googlei">Google Images 
									<option value="duck">DuckDuckGo 
									<option value="wiki">Wikiedpia
								</select> 
							</td>
						</tr>
						<tr>
							<td>Search term(s):</td> 
							<td>
								<input type="text" name="terms" size="25" maxlength="25"> 
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" value="Submit" class="centercell">
							</td> 
						</tr>
					</table> 
				</form> 
				<br>

				<p>Enter text to filter Michigan elected officials by:</p>
				<p><input id="myInput" type="text" placeholder="Enter search text..."></p>
				<table class="table1"> 
					<thead>
						<tr>
							<th>Name</th> 
							<th>Position</th> 
							<th>Contact</th>
						</tr>
					</thead>
					<tbody id="myTable"> 
						<tr>
							<td>Wendell Byrd</td>
							<td>State Rep, 3rd House District, Northern Detroit</td> 
							<td>(855) 564-4673</td>
						</tr>
						<tr>
							<td>Abdullah Hammoud</td>
							<td>State Rep, 15th House District, Dearborn</td> 
							<td>(855) 775-1515</td>
						</tr>
						<tr>
							<td>Sylvia Santana</td>
							<td>State Senator, 3rd District, Dearborn, Detroit, Melvindale</td> 
							<td>(517) 373-0990</td>
						</tr>
						<tr>
							<td>Gretchen Whitmer</td>
							<td>Michigan Governor</td> 
							<td>(517) 373-3400</td>
						</tr>
					</tbody>
				</table>

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