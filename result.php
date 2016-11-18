<html>
	<head>
		<title>What's on Tonight?</title>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/aclass.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>

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
	</head>

	<?php

	$dw = date("D", time());

	mysql_connect("mysql4.000webhost.com", "a6276354_btn", "maguire3") or die(mysql_error());
	mysql_select_db("a6276354_btn") or die(mysql_error());

	$data = mysql_query("SELECT * FROM $dw ORDER BY RAND()") or die(mysql_error());

	$event = array();
	$club = array();

	while ($row = mysql_fetch_array($data)) {
		$event[] = $row['event'];
		//$club[] = $row['club'];
	}

	$elements = count($event);
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
			<div class="container-result">
				<div class="jumbotron">

					<h1 align="center">Brightonian Nights</h1>

					<h2 align="center">On Tonight In Brighton:</h2>
				</div>

				<div class='panel-group'>
					<div class='panel panel default' id="infobar" style="background-color: #eeeeee">
						<div class='panel-heading'>
							<h4 class='panel-title'>
							<div class='row'>
								<div class='col-md-4'>
									<h4>Event Name</h4>
								</div>
								<div class='col-md-2'>
									<h4>Club</h4>
								</div>
								<div class='col-md-2'>
									<h4>Music Genre</h4>
								</div>
								<div class='col-md-2'>
									<h4>Promoter</h4>
								</div>
								<div class='col-md-2'>
									<h4>Price</h4>
								</div>
							</div></h4>
						</div>
					</div>
				</div>
				<br>

				<?php
				include ("php/club.php");
				//include ("php/live.php");
				//include ("php/adverts.php");

				//$test = mysql_query("SELECT COUNT(*) FROM advertone") or die(mysql_error());
				//$test2 = mysql_query("SELECT COUNT(*) FROM adverttwo") or die(mysql_error());
				//$test3 = mysql_query("SELECT COUNT(*) FROM advertthree") or die(mysql_error());

				//$testrow = mysql_fetch_assoc($test);
				//$testrow2 = mysql_fetch_assoc($test2);
				//$testrow3 = mysql_fetch_assoc($test3);

				//$testno = $testrow['COUNT(*)'];
				//$testno2 = $testrow2['COUNT(*)'];
				//$testno3 = $testrow3['COUNT(*)'];
/**
				$count = 1;
				foreach ($event as $value) {
					$checkevent = mysql_query("SELECT live FROM events WHERE eventindex='$value'") or die(mysql_error());
					while ($rowchk = mysql_fetch_array($checkevent)) {
						$check = $rowchk['live'];
					}
					if ($check == 0) {
						buildClub($value, $count);

					} elseif ($check == 1) {
						buildLive($value, $count);
					}

					if ($testno > 0) {
						if ($count == 3) {
							//advertOne($testno);
							//echo $a1construct;
						}
					}

					if ($testno2 > 0) {
						if ($count == 6) {
							//advertTwo($testno2);
							//echo $a2construct;
						}
					}

					if ($testno3 > 0) {
						if ($count == 9) {
							//advertThree($testno3);
							//echo $a3construct;
						}
					}

					$count = $count + 1;

				}
				**/
				?>
			</div>
		</div>
		</div>
	</body>
</html>

