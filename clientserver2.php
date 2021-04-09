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
        <link rel="stylesheet" href="css/custom-table.css">
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
						<h1>Client/Server Computing</h1> 
						<h4>by Moe Chaker</h4>
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

				<h2>What is the client/server model?</h2>
				<p>Client–server model is a distributed application structure that partitions tasks or workloads between the
					providers of a resource or service, called servers, and service requesters, called clients.</p>
				<cite>en.wikipedia.org</cite>

				<h2>Advantages of the client/server model</h2>
				<p>Several major advantages of the client server model are:</p>

				<ol>
					<li>Security - Servers have better control access and resources to ensure that only authorized clients can
						access or
						manipulate data and server updates are administered effectively.</li>

					<li>Data Processing Capability Despite the Location - Client-server users can directly log into a system despite
						of the location or technology of the processors.</li>


					<li>Improved Data Sharing - Data is retained by usual business processes and manipulated on a server is
						available for designated users
						(clients) over an authorized access.</li>

					<li>Integration of Services - Every client is given the opportunity to access corporate information via desktop
						interface eliminating the
						necessity to log into a terminal mode or processor. <em>sites.google.com</em></li>
				</ol>

				<h2>Examples of client/server software</h2>

				<table>
					<tr>
						<th>Software</th>
						<th>Client</th>
						<th>Server</th>
					</tr>
					<tr>
						<td>Web</td>
						<td>Chrome <br> Ms Edge <br> Safari</td>
						<td>Apache <br> MS IIS</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>MS Outlook <br> Groupwise</td>
						<td>MS Exchange</td>
					</tr>
					<tr>
						<td>FTP</td>
						<td>FileZilla <br> WS FTP <br> Cute FTP</td>
						<td>FileZilla</td>
					</tr>
					<tr>
						<td>Web Development/Coding</td>
						<td>HTML <br> CSS <br> Javascript </td>
						<td>PHP <br> Perl <br> Python <br> SQL </td>
					</tr>
					<tr>
						<td>Database</td>
						<td>MS Access</td>
						<td>MS SQL Server <br> MySQL <br> Oracle</td>
					</tr>

				</table>

				<h2>Examples of TCP/IP Protocol</h2>
				<ul>
					<li>FTP - File Transfer Protocol is a set of rules that computers follow for the transferring of files from one
						system to another over the
						internet. <em>investopedia.com</em></li>
					<li>HTTP - Hypertext Transfer Protocol is an application-layer protocol for transmitting hypermedia documents,
						such as HTML.
						<em>developer.mozilla.org</em>
					</li>
					<li>HTTPS - Hypertext Transfer Protocol Secure is an extension of the HTTP used for secure communication over a
						computer network.
						<em>en.wikipedia.org</em>
					</li>
					<li>DHCP - Dynamic Host Configuration Protocol is a network server that automatically provides and assigns IP
						addresses, default gateways and other
						network parameters to client devices. <em>infoblox.com</em></li>
					<li>SMTP - Simple Mail Transfer Protocol is a communication protocol for electronic mail transmission.
						<em>en.wikipedia.org</em>
					</li>
				</ul>

				<h2>Examples of network utilities and Services</h2>

				<ul>
					<li>ping - a computer network administration software utility used to test the reachability of a host on an
						Internet Protocol (IP) network. <em>en.wikipedia.org</em></li>
					<li>tracert - a network diagnostic tool used to track in real-time the pathway taken by a packet on an IP
						network from source to destination, reporting the IP addresses of all the routers it pinged in between.
						<em>thousandeyes.com</em>
					</li>
					<li>pathping - a command-line network utility that combines the functionality of ping with that of tracert.
						<em>en.wikipedia.org</em>
					</li>
					<li><a href="https://www.whois.com/whois">whois</a> - an Internet service used to look up information about a
						domain name.</li>
					<li>ipconfig - A Windows command line utility that is used to manage the IP address assigned to the machine it
						is running in. <em>pcmag.com</em></li>
				</ul>

				<h2>Examples of relative and absolute addresses</h2>
				<table>
					<tr>
						<th>Relative Addresses <br> (internal links)</th>
						<th>Absolute Addresses <br> (external links)</th>
					</tr>
					<tr>
						<td>
							students/register.html (sub-folder)
							<br>
							courses/winter2021/world.cpp (sub-sub-folder, i.e. two down)
							<br>
							../students.html (parent folder, i.e. one up)
							<br>
							../..students.html (i.e. two up)
						</td>
						<td>
							https://www.whois.com/whois
							<br>
							https://www.hfcc.edu/online-learning
						</td>
					</tr>
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