<?php

require_once("db.php");
header("Content-Type: application/json");


$response =array();
$response["success"] = false;
$response['message'] = "";		
$response['user'] = null;

if(isset($_POST["email"]) && isset($_POST["pass"]))
{
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
	$res = $con->query($query);

	if($res != false)
	{
		$result = $res->fetch_object();
			
			$response["success"] = true;
			$response["user"] = $result;
	}
	else
	{
		$response["message"] = "Something went wrong while registering";
	}
	
}
else {
	
		$response["message"] = "Something went wrong while registering";
}

echo json_encode($response);


?>