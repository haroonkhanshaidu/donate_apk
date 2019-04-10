<?php

require_once("db.php");

header("Content-Type: application/json");


$response =array();
$response["success"] = false;
$response['message'] = "";

if(isset($_POST['email']) AND isset($_POST['darood']) AND isset($_POST['dt']))
{
	$email = $_POST['email'];
	$darood = $_POST['darood'];
	$dt = $_POST['dt'];
	$q = "SELECT daroodtotal FROM daroodtable ORDER BY id DESC LIMIT 1";
	$get = $con->query($q);
	$total = $get->fetch_assoc();
	$dbtotal = $total['daroodtotal'];

	$newtotal = intval($dbtotal)+intval($darood);


	$query = "INSERT INTO daroodtable (email, darood, daroodtotal, datetimedb) VALUES('$email', '$darood', '$newtotal', '$dt')";

	$res = $con->query($query);


	if($res != false)
	{
			
			$response["success"] = true;
			$response['message'] = "Darood donated sucessfully";

	}
	else
	{
		$response["message"] = "Something went wrong while donating";
		
	}


}
else
	{
		$response["message"] = "Input Fields are required";
		
	}

	echo json_encode($response);

?>