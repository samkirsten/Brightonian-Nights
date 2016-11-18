<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Brightonian Nights</title>
		<meta name="description" content="Brightonian Nights is the Number one way for discovering the club scene in Brighton!
		Find out what is on at the Clubs in Brighton tonight, and for the week ahead.">
		<meta name="author" content="Brightonian Nights">

		<meta name="keywords" content="clubs, brighton, tonight, music, events, late, whats, on, brightonian, nights">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/aclass.css.css" rel="stylesheet">

		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>

		<script type="text/javascript">
			var $buoop = {};
			$buoop.ol = window.onload;
			window.onload = function() {
				try {
					if ($buoop.ol)
						$buoop.ol();
				} catch (e) {
				}
				var e = document.createElement("script");
				e.setAttribute("type", "text/javascript");
				e.setAttribute("src", "//browser-update.org/update.js");
				document.body.appendChild(e);
			}
		</script>

		<!-- AddThis Smart Layers BEGIN -->
		<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52e3f3086f23da5a"></script>
		<script type="text/javascript">
			addthis.layers({
				'theme' : 'transparent',
				'follow' : {
					'services' : [{
						'service' : 'facebook',
						'id' : 'brightoniannights'
					}, {
						'service' : 'twitter',
						'id' : 'BNnights'
					}]
				}
			});
		</script>
		<!-- AddThis Smart Layers END -->

		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-44974932-1', 'brightoniannights.co.uk');
			ga('send', 'pageview');

		</script>
		<style>
			@font-face {
				font-family: Coolvetica;
				src: url(/fonts/coolvetica.ttf);
			}

			h1, h2, h4 {
				font-family: Coolvetica;
			}
		</style>

	</head>

	<?php
	$dw = date("w", time());
	$steps = 0 + $dw;

	$wkdays = array(0 => "Sunday", 1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", );

	$wkkey = array(0 => "Sun", 1 => "Mon", 2 => "Tue", 3 => "Wed", 4 => "Thu", 5 => "Fri", 6 => "Sat", );

	//for ($i = 0; $i <= $dw; $i++) {
	//array_push($wkdays, array_unshift($wkdays));
	//array_unshift($wkdays, $wkdays);
	//array_unshift($wkkey, $wkkey);
	//}

	function rotate_array($steps, $arr) {
		if ($steps >= 0) {
			for ($i = 0; $i < $steps; $i++) {
				$elm = array_shift($arr);
				array_push($arr, $elm);
			}
		} else {
			for ($i = 0; $i > $steps; $i--) {
				$elm = array_pop($arr);
				array_unshift($arr, $elm);
			}
		}
		return $arr;
	}

	$rotwk = rotate_array($steps, $wkkey);
	$rotwd = rotate_array($steps, $wkdays);
	?>

	<body>

		<div id="wrap">

			<header class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button">
							...
						</button>
						<a href="./" class="navbar-brand" class="brandkey">Brightonian Nights</a>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse">
						<ul class="nav navbar-nav">
							<li>
								<a href="./about">About</a>
							</li>
							<li>
								<a href="./contact">Contact Us</a>
							</li>
							<li>
								<a href="./advertise">Advertise With Us</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>

			<div class="container-home">
				<div class="jumbotron">
					<h1 align="center">Brightonian Nights</h1>
					<h2 align="center" id="toffee">Today is</h2>
					<script type="text/javascript">
						var d = new Date();
						var weekday = new Array(7);
						var currday = new String();
						weekday[0] = "Sunday";
						weekday[1] = "Monday";
						weekday[2] = "Tuesday";
						weekday[3] = "Wednesday";
						weekday[4] = "Thursday";
						weekday[5] = "Friday";
						weekday[6] = "Saturday";
						currday = weekday[d.getDay()];
						document.getElementById('toffee').innerHTML = "Today Is A " + currday + " In Brighton";
					</script>
					<h4 align="center">Find Out What's On In Brighton Tonight!</h4>

					<div class='panel-group' id='accordion'>
						<div class='panel panel default' style="background-color: #eeeeee">
							<div class='panel-heading' align="center">
								<a href="./result.php" class="btn btn-warning btn-lg">What's On Tonight?</a>
								<a href="#palcol" data-toggle="collapse" class="accordian-toggle btn btn-warning btn-lg" data-parent="accordion">What's On This Week? <span class="caret"> </span> </a>
							</div>

							<div id='palcol' class='panel-collapse collapse'>
								<div class='panel-body'>
									<div class='row' align="center">

										<div class="btn-group">

											<form action="./weekview.php" method="post">
												<?php
												//foreach($wkdays as $value) {
												//echo ($value);
												//}
												$length = count($wkdays);
												for ($i = 0; $i < $length; $i++) {
													echo "
<button type='submit' name='week' value='$rotwk[$i]' class='btn btn-primary btn-lg customweek'>
$rotwd[$i]
</button>
";
												}
												?>
											</form>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>

					<!--
					<div class="span6 pagination-centered">
					<p align="center">

					<a href="result.php" class="btn btn-warning btn-lg">What's On Tonight?</a>
					<a href="result.php" class="btn btn-warning dropdown-toggle btn-lg">What's On This Week? <span class="caret"> </span> </a>
					</p>
					</div>
					-->

				</div>
			</div>

			<footer class="navbar navbar-inverse navbar-fixed-bottom">
				<div class="container">
					<div class="navbar-header">
						<h4 class="navbar-brand" class="brandkey" align="center">Brightonian Nights © 2014</h4>
					</div>
					<nav class="collapse navbar-collapse bs-navbar-collapse">

					</nav>
				</div>
			</footer>

		</div>
	</body>
</html>
