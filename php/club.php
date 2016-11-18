<?php

function buildClub($passindex, $identifier)
{
	            
				
					$eventsql = mysql_query("SELECT * FROM events WHERE eventindex='$passindex'") or die(mysql_error());
					while ($row = mysql_fetch_array($eventsql)) {
						$description = $row['name'];
						$host = $row['promoter'];
						$student = $row['student'];
						$music = $row['music'];
						$club = $row['club'];
						$notes = $row['notes'];
						$early = $row['early'];
						$mid = $row['mid'];
						$late = $row['late'];
						$offer1 = $row['offer1'];
						$offer2 = $row['offer2'];
						$offer3 = $row['offer3'];
						$offer4 = $row['offer4'];
					}

					$clubsql = mysql_query("SELECT * FROM clubs WHERE clubindex='$club'") or die(mysql_error());
					while ($row2 = mysql_fetch_array($clubsql)) {
						$name = $row2['name'];
						$logo = $row2['logo'];
						$no = $row2['no'];
						$road = $row2['road'];
						$town = $row2['town'];
						$post = $row2['postcode'];
						$web = $row2['web'];
						$clubnotes = $row2['notes'];
					}

					$promotersql = mysql_query("SELECT * FROM host WHERE hostindex='$host'") or die(mysql_error());
					while ($row3 = mysql_fetch_array($promotersql)) {
						$hostname = $row3['name'];
					}

					if ($early !== "none") {
						$earlyli = "<li><p>$early</p></li>";
					} else {
						$earlyli = "";
					}

					if ($mid !== "none") {
						$midli = "<li><p>$mid</p></li>";
					} else {
						$midli = "";
					}

					if ($late !== "none") {
						$lateli = "<li><p>$late</p></li>";
					} else {
						$lateli = "";
					}

					if ($offer1 !== "none") {
						$offerli1 = "<li><p>$offer1</p></li>";
					} else {
						$offerli1 = "";
					}

					if ($offer2 !== "none") {
						$offerli2 = "<li><p>$offer2</p></li>";
					} else {
						$offerli2 = "";
					}

					if ($offer3 !== "none") {
						$offerli3 = "<li><p>$offer3</p></li>";
					} else {
						$offerli3 = "";
					}

					if ($offer4 !== "none") {
						$offerli4 = "<li><p>$offer4</p></li>";
					} else {
						$offerli4 = "";
					}

					echo "
 <div class='panel-group' id='accordion'>
		<div class='panel panel default'>
			<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='accordian-toggle' data-toggle='collapse' data-parent='accordion' href='#collapse$identifier'>
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
		  			<div class='col-md-1'>
		  				<h4>$student</h4>
		  			</div>
		  			<div class='col-md-1'>
		  			<span class='glyphicon glyphicon-chevron-down'></span>
		  			</div>
		  		</div>
		  	</a>
		  	</h4>
		  	</div>
		  	<div id='collapse$identifier' class='panel-collapse collapse'>
		  		<div class='panel-body'>
		  			<div class='row'>
		  			<div class='col-md-12'>
		  			<p>$notes</p>
		  			</div>
		  			</div>
		  			<div class='row'>
		  			  <div class='col-md-3'>
		  			  <h4>Offers:</h4>
		  			  <br>
		  			  <ul>
		  			  $offerli1
		  			  $offerli2
		  			  $offerli3
		  			  $offerli4
		  			  </ul>
		  			  </div>
		  			  
					  <div class='col-md-3'>
					  <h4>Entry Prices:</h4>
		  			  <br>
		  			  <ul>
		  			  $earlyli
		  			  $midli
		  			  $lateli
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
                       <div class='modal fade' id='myModal$club' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' position='relative'>
                          <div class='modal-dialog'>
                             <div class='modal-content'>
                                <div class='modal-header'>
                                     <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                     <h2 class='modal-title' align='center'>$name</h2>
                                </div>
                          <div class='modal-body'>
                          <p>$clubnotes</p>
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
    
    <br>
   
";
}

?>