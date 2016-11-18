<html>
	<head>
		<title>What's on Tonight?</title>
		
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/aclass.css" rel="stylesheet">
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</head>
	
	
<?php
$dw = date( "D", time());
	
mysql_connect("localhost", "brightonian", "moosing") or die (mysql_error());
mysql_select_db("brightonian") or die (mysql_error());

$data = mysql_query("SELECT * FROM $dw") or die(mysql_error());

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
		  			<button class="navbar-toggle" type="button">...</button>
		  			
		  			<a href="./" class="navbar-brand" class="brandkey">Brightonian Nights</a>
		  			
		  		</div>
		  		<nav class="collapse navbar-collapse bs-navbar-collapse">
		  			<ul class="nav navbar-nav">
		  				<li>
		  					<a href="#">About</a>
		  				</li>
		  				<li>
		  					<a href="contact.html">Contact Us</a>
		  				</li>
		  			</ul>
		  		</nav>
		  	</div>
		  </header>
	<div class="container-result">
	<div class="jumbotron">
		
		<h1 align="center">Brightonian Nights:</h1>
		
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
		  				<h4>Student Friendly?</h4>
		  			</div>
		  		</div>
		  	</h4>
		 </div>
		</div>
	</div>
	<br>
				
	<?php
	$count = 1;
foreach ($event as $value)
{
$eventsql = mysql_query("SELECT * FROM events WHERE eventindex='$value'") or die(mysql_error());
while ($row = mysql_fetch_array($eventsql)) {
	$description = $row['name'];
	$host = $row['promoter'];
	$student = $row['student'];
	$music = $row['music'];
	$club = $row['club'];
	$notes = $row['notes'];
	$drink = $row['drinks'];
	$early = $row['early'];
	$mid = $row['mid'];
	$late = $row['late'];
	$count = $count + 1;
}	
	
$clubsql = mysql_query("SELECT * FROM clubs WHERE clubindex='$club'") or die(mysql_error());
while ($row2 = mysql_fetch_array($clubsql)){
	$name = $row2['name'];
	$logo = $row2['logo'];
	$no = $row2['no'];
	$road = $row2['road'];
	$town = $row2['town'];
	$post = $row2['postcode'];
	$web = $row2['web'];
}

$promotersql = mysql_query("SELECT * FROM host WHERE hostindex='$host'") or die(mysql_error());
while ($row3 = mysql_fetch_array($promotersql)){
	$hostname = $row3['name'];
}

$drinksql = mysql_query("SELECT * FROM drinks WHERE drinkindex='$drink'") or die(mysql_error());
while ($row4 = mysql_fetch_array($drinksql)){
	$lagerdr = $row4['lagerdr'];
	$lagerbt = $row4['lagerbottle'];
	$jager = $row4['jagerbomb'];
	$spiritmix = $row4['spiritmix'];
	$dbmix = $row4['dbspiritmix'];
	$shot = $row4['shot'];
}

echo "
 <div class='panel-group' id='accordion'>
		<div class='panel panel default'>
			<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='accordian-toggle' data-toggle='collapse' data-parent='accordion' href='#collapse$count'>
		  	<div class='row'>
		  			<div class='col-md-4'>
		  				<h4>$description</h4>
		  			</div>
		  			<div class='col-md-2'>
		  				<h4>$name</h4>
		  			</div>
		  			<div class='col-md-2'>
		  				<h4>$music</h4>
		  			</div>
		  			<div class='col-md-2'>
		  				<h4>$hostname</h4>
		  			</div>
		  			<div class='col-md-2'>
		  				<h4>student friendly</h4>
		  			</div>
		  		</div>
		  	</a>
		  	</h4>
		  	</div>
		  	<div id='collapse$count' class='panel-collapse collapse'>
		  		<div class='panel-body'>
		  			<div class='row'>
		  			<div class='col-md-12'>
		  			<p>$notes</p>
		  			</div>
		  			</div>
		  			<div class='row'>
		  			  <div class='col-md-3'>
		  			  <h4>Drink Prices:</h4>
		  			  <br>
		  			  <ul>
		  			  <li><p>Lager Draught: $lagerdr</p></li>
		  			  <li><p>Lager Bottle:  $lagerbt</p></li>
		  			  <li><p>Spirit Mixer:  $spiritmix</p></li>
		  			  <li><p>Double Mixer:  $dbmix</p></li>
		  			  <li><p>Jagerbomb:     $jager</p></li>
		  			  <li><p>Shot:          $shot</p></li>
		  			  </ul>
		  			  </div>
		  			  
					  <div class='col-md-3'>
					  <h4>Entry Prices:</h4>
		  			  <br>
		  			  <ul>
		  			  <li><p>Early:     $early</p></li>
		  			  <li><p>Standard:  $mid</p></li>
		  			  <li><p>Late:      $late</p></li>
		  			  </ul>
					  </div>
					  
					  <div class='col-md-3'>
					  <h4>Address:</h4>
					  <br>
		  			  <ul>
		  			  <li>$name</li>
		  			  <li>$no $road</li>
		  			  <li>$town</li>
		  			  <li>$post</li>
		  			  <li><a href='http://$web'>$name Website</a></li>
		  			  <ul>
		  			  </div>
		  			  
					  <div class='col-md-3'>
					  <h4>More Info:</h4>
					  <br>
		  			  <p>
		  			  If you would like more information about $name
		  			  then click the button below to find out. 
		  			  </p>
		  			  <br>
		  			  <p align='center'>
					   
					     <!-- Button trigger modal -->
                          <a data-toggle='modal' href='#myModal$club' class='btn btn-warning btn-lg'>More Info</a>

                       <!-- Modal -->
                       <div class='modal fade' id='myModal$club' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                             <div class='modal-content'>
                                <div class='modal-header'>
                                     <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                     <h2 class='modal-title' align='center'>$name</h2>
                                </div>
                          <div class='modal-body'>
                          ...
                          </div>
                          <div class='modal-footer'>
                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
		 		      </p>
		  			  
		  			  </div>
					  
		  			</div>
		  			</div>
		  		</div>
		  	</div>
		  	</div>
    </div>
    <br>
";
}

//}
?>
	
	
	
	</div>
	</div>
	</body>
	
</html>


