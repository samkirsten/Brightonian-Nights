<html>
	<head>

		<?php

		$dw = $_POST["week"];

		if ($dw == "mon") {
			$dayselect = "Monday";
		} elseif ($dw == "tue") {
			$dayselect = "Tuesday";
		} elseif ($dw == "wed") {
			$dayselect = "Wednesday";
		} elseif ($dw == "thu") {
			$dayselect = "Thursday";
		} elseif ($dw == "fri") {
			$dayselect = "Friday";
		} elseif ($dw == "sat") {
			$dayselect = "Saturday";
		} elseif ($dw == "sun") {
			$dayselect = "Sunday";
		}
		?>
		
		<?php
		$dr = date("w", time());
		$steps = 0 + $dr;

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
		

		<title>
			<?php
			echo "$dayselect's in Brighton";
			?>
		</title>

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

					<h2 align="center"><?php
					echo "$dayselect's in Brighton:";
			?></h2>
			
			<div align="center" style="background-color: #eeeeee; margin-top: 40px">

											<form action="./weekview" method="post">
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
				
			?>			</div>
		</div>
		</div>
	</body>
</html>

