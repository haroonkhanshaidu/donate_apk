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
							<th>Name</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
			<?php


			$q = "SELECT * FROM users";
			$get = $con->query($q);
			if ($get != false) {
				while ($row = $get->fetch_assoc()) {
					echo '<tr>';
				    echo '<td>'.$row["userid"].'</td><td>'.$row["name"].'</td><td>'.$row["email"].'</td>';
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