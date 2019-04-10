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
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-lg">
				
			<?php


			$q = "SELECT daroodtotal  FROM daroodtable ORDER BY daroodtotal DESC LIMIT 1";
			$get = $con->query($q);
			if ($get != false) {
				$row = $get->fetch_assoc();
			}

			?>
			<h2 class="text-center">Total Donation till now <?php echo $row["daroodtotal"];?></h2>
		</div>
		</div>
	</div>

</body>
</html>