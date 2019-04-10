<?php
include 'header.php';
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Total Donation</title>
</head>
<body>

	<div class="container-fluid" style="margin-top: 10px;">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 mx-auto">
				<form action="" method="POST" class="form-inline" role="form">
			
				<div class="form-group">
					<label class="sr-only" for="">Start Date</label>
					<input type="date" class="form-control" id="" name="sdate">
				</div>

				<div class="form-group">
					<label class="sr-only" for="">End Date</label>
					<input type="date" class="form-control" id="" name="edate">
				</div>
			
				
			
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
			<?php

			if (isset($_POST["submit"])) {
				$sdate = $_POST["sdate"];
				$edate = $_POST["edate"];
				$newDates = date("d-m-Y", strtotime($sdate));
				$newDatee = date("d-m-Y", strtotime($edate));
				$sdatenew =  $newDates ." ". $date = date('h:i:s', time());
				$edatenew =  $newDatee ." ". $date = date('h:i:s', time());
						$q = "SELECT * FROM daroodtable WHERE datetimedb BETWEEN '" . $sdatenew . "' AND  '" . $edatenew . "'";
			$get = $con->query($q);
			if ($get != false) {
				?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Darood</th>
							<th>Darood Sum</th>
							<th>Date Time</th>
						</tr>
					</thead>
					<tbody>
			<?php


			
				while ($row = $get->fetch_assoc()) {
					echo '<tr>';
				    echo '<td>'.$row["id"].'</td><td>'.$row["email"].'</td><td>'.$row["darood"].'</td><td>'.$row["daroodtotal"].'</td><td>'.$row["datetimedb"].'</td>';
				    echo '</tr>';
				}
			}

			?>

					</tbody>
				</table>
				<?php
			}


			?>
				
		</div>
	</div>

</body>
</html>