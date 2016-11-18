<?php

	mysql_connect("mysql4.000webhost.com", "a6276354_btn", "maguire3") or die(mysql_error());
	mysql_select_db("a6276354_btn") or die(mysql_error());


function advertOne($importtest)
{

if ($importtest > 0){ 
$data = mysql_query("SELECT * FROM advertone ORDER BY RAND() LIMIT 1") or die(mysql_error());

while ($row = mysql_fetch_array($data)) {
	$a1name = $row['name'];
	$a1strap = $row['strapline'];
	$a1desc = $row['description'];
	$a1web = $row['web'];
	$a1email = $row['email'];
	$a1no = $row['no'];
	$a1road = $row['road'];
	$a1town = $row['town'];
	$a1post = $row['postcode'];
	$a1logo = $row['logo'];
}

echo "<div class='panel-group' id='accordion'>
		<div class='panel panel default' style='background-color: #D5BDED'>
			<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='accordian-toggle' data-toggle='collapse' data-parent='accordion' href='#collapsead1'>
		  	<div class='row'>
		  			<div class='col-md-4'>
		  				<h4>$a1name</h4>
		  			</div>
		  			<div class='col-md-7'>
		  				<h4>$a1strap</h4>
		  			</div>
		  			<div class='col-md-1'>
		  			<span class='glyphicon glyphicon-chevron-down'></span>
		  			</div>
		  		</div>
		  	</a>
		  	</h4>
		  	</div>
		  	<div id='collapsead1' class='panel-collapse collapse'>
		  		<div class='panel-body'>
		  			<div class='row'>
		  			<div class='col-md-12'>
		  			<p>$a1desc</p>
		  			</div>
		  			</div>
		  			<div class='row'>
		  			
		  			  <div class='col-md-6'>
		  			  <img src='$a1logo' alt='$a1name Logo'>
		  			  </div>
		  			  
					  
					  <div class='col-md-6'>
					  <h4>Address:</h4>
					  <br>
		  			  <ul>
		  			  <li>$a1name</li>
		  			  <li>$a1no $a1road</li>
		  			  <li>$a1town</li>
		  			  <li>$a1post</li>
		  			  <li><a href='http://$a1web'>$a1name Website</a></li>
		  			  <ul>
		  			  </div>
					  
		  			</div>
		  			</div>
		  		</div>
		  	</div>
		  	</div>
    
    <br>
";
}
else {
	print "";
}
}

function advertTwo($importtest2)
{


if ($importtest2 > 0){ 

mysql_connect("database.lcn.com", "LCN379383_bright", "dangermouse") or die(mysql_error());
mysql_select_db("brightoniannights_co_uk_db") or die(mysql_error());

$data2 = mysql_query("SELECT * FROM adverttwo ORDER BY RAND() LIMIT 1") or die(mysql_error());

while ($row2 = mysql_fetch_array($data2)) {
	$a2name = $row2['name'];
	$a2strap = $row2['strapline'];
	$a2desc = $row2['description'];
	$a2web = $row2['web'];
	$a2email = $row2['email'];
	$a2no = $row2['no'];
	$a2road = $row2['road'];
	$a2town = $row2['town'];
	$a2post = $row2['postcode'];
	$a2logo = $row2['logo'];
}

echo "<div class='panel-group' id='accordion'>
		<div class='panel panel default' style='background-color: #D5BDED'>
			<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='accordian-toggle' data-toggle='collapse' data-parent='accordion' href='#collapsead2'>
		  	<div class='row'>
		  			<div class='col-md-4'>
		  				<h4>$a2name</h4>
		  			</div>
		  			<div class='col-md-7'>
		  				<h4>$a2strap</h4>
		  			</div>
		  			<div class='col-md-1'>
		  			<span class='glyphicon glyphicon-chevron-down'></span>
		  			</div>
		  		</div>
		  	</a>
		  	</h4>
		  	</div>
		  	<div id='collapsead2' class='panel-collapse collapse'>
		  		<div class='panel-body'>
		  			<div class='row'>
		  			<div class='col-md-12'>
		  			<p>$a2desc</p>
		  			</div>
		  			</div>
		  			<div class='row'>
		  			
		  			  <div class='col-md-6'>
		  			  <img src='$a2logo' alt='$a2name Logo'>
		  			  </div>
		  			  
					  
					  <div class='col-md-6'>
					  <h4>Address:</h4>
					  <br>
		  			  <ul>
		  			  <li>$a2name</li>
		  			  <li>$a2no $a2road</li>
		  			  <li>$a2town</li>
		  			  <li>$a2post</li>
		  			  <li><a href='http://$a2web'>$a2name Website</a></li>
		  			  <ul>
		  			  </div>
					  
		  			</div>
		  			</div>
		  		</div>
		  	</div>
		  	</div>
    
    <br>
";
}
else{
	print "";
}
}

function advertThree($importtest3)
{

if ($importtest3 > 0){ 

mysql_connect("database.lcn.com", "LCN379383_bright", "dangermouse") or die(mysql_error());
mysql_select_db("brightoniannights_co_uk_db") or die(mysql_error());

$data3 = mysql_query("SELECT * FROM advertthree ORDER BY RAND() LIMIT 1") or die(mysql_error());

while ($row3 = mysql_fetch_array($data3)) {
	$a3name = $row3['name'];
	$a3strap = $row3['strapline'];
	$a3desc = $row3['description'];
	$a3web = $row3['web'];
}

echo "<div class='panel-group' id='accordion'>
		<div class='panel panel default' style='background-color: #D5BDED'>
			<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='accordian-toggle' data-toggle='collapse' data-parent='accordion' href='#collapsead3'>
		  	<div class='row'>
		  			<div class='col-md-4'>
		  				<h4>$a3name</h4>
		  			</div>
		  			<div class='col-md-7'>
		  				<h4>$a3strap</h4>
		  			</div>
		  			<div class='col-md-1'>
		  			<span class='glyphicon glyphicon-chevron-down'></span>
		  			</div>
		  		</div>
		  	</a>
		  	</h4>
		  	</div>
		  	<div id='collapsead3' class='panel-collapse collapse'>
		  		<div class='panel-body'>
		  			<div class='row'>
		  			<div class='col-md-12'>
		  			<p>$a3desc</p>
		  			</div>
		  			</div>
		  			<div class='row'>
					  
					  <div class='col-md-12' align='center'>
					  <a href='http://$a3web' class='btn btn-warning btn-lg'>$a3name Website</a>
		  			  </div>
					  
		  			</div>
		  			</div>
		  		</div>
		  	</div>
		  	</div>
    
    <br>
";
}
else {
	print "";
}
}

?>