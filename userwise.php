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
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Email</th>
							<th>Darood</th>
							<th>Darood Total</th>
							<th>Date Time</th>
						</tr>
					</thead>
					<tbody>
			<?php


			$q = "SELECT * FROM daroodtable";
			$get = $con->query($q);
			if ($get != false) {
				while ($row = $get->fetch_assoc()) {
					echo '<tr>';
				    echo '<td>'.$row["id"].'</td><td>'.$row["email"].'</td><td>'.$row["darood"].'</td><td>'.$row["daroodtotal"].'</td><td>'.$row["datetimedb"].'</td>';
				    echo '</tr>';
				}
			}

			?>

					</tbody>
				</table>
		</div>
	</div>

</body>
</html>