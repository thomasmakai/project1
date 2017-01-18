<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>AWS - Temperature Log</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<a href="index.php" class="title">AWS</a>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="templog.html" class="active">Temperature Log</a></li>
						<li><a href="elements.html">Elements</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Temperature Log</h1>
							<span class="image fit"><img src="" alt="" /></span>

<?php

$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {

    echo '<table border="1">';

    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<thead><tr>';
        }else{
            echo '<tr>';
        }

        for ($c=0; $c < $num; $c++) {
            //echo $data[$c] . "<br />\n";
            if(empty($data[$c])) {
               $value = "&nbsp;";
            }else{
               $value = $data[$c];
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }

        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }

    echo '</tbody></table>';
    fclose($handle);
}
?>
                            
                            <!--
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique.</p>
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
-->
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; AWS. All rights reserved.</li>
<!--                        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>-->
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>