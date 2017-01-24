<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
		<title>AWS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        
        <!-- C3JS stylesheets -->
        <link rel='stylesheet' href='stylesheets/style.css' />
<!--		<link rel='stylesheet' href='stylesheets/bootstrap.min.css' />-->
		<link rel='stylesheet' href='stylesheets/font-awesome.min.css' />

        <!-- Load c3.css -->
		<link href="stylesheets/c3.css" rel="stylesheet" type="text/css">

		<!-- Load d3.js and c3.js -->
		<script src="javascripts/d3.v3.min.js" charset="utf-8"></script>
		<script src="javascripts/c3.min.js"></script>

		<!-- Load papaparse.js -->
		<script src="javascripts/papaparse.min.js"></script>
        <!-- Status Values Script -->
        <script src="javascripts/status.js"></script>
        <!-- HTML include script -->
        <script src="http://www.w3schools.com/lib/w3data.js"></script>
    </head>
    
	<body>

		<!-- Header -->
        <div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/tap.jpg" alt="" /></span>
							<h1 id="title">AWS</h1>
							<p>Avoid Water Spillage A/S</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="index.php" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="index.php" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Status</span></a></li>
								<li><a href="datagraph.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-bar-chart" aria-hidden="true">Graph</span></a></li>
                                <li><a href="datatable.php" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-table" aria-hidden="true">Table</span></a></li>
<!--								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>-->
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>
        <!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><strong>AWS</strong> 
<!--                                    a <a href="">link1</a> <br /> text <a href="">link2</a>.</h2>-->
								<p>Avoid Water Spillage A/S</p>
							</header>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>DATA TABLE</h2>
							</header>
                            
<?php include 'table.php'; ?>
                            
					</section>

				<!-- About Me -->
<!--
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2> Temperature Graphed</h2>
							</header>
                            
                            <div class="container">
    		                  <div id="chart"></div>
    	                   </div>
        
                            <script src="javascripts/create-graph.js"></script>

						  </div>
					</section>
-->

				<!-- Contact -->
<!--
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>...</p>

							<form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>
-->

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; AWS. All rights reserved.</li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>