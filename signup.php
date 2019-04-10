<?php

require_once("db.php");
header("Content-Type: application/json");


$response =array();
$response["success"] = false;
$response['message'] = "";

if(isset($_POST["email"]) && $_POST["name"] && isset($_POST["pass"]))
{
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];

	$ch = "SELECT * FROM users WHERE email = '$email'";
	$run = $con->query($ch);
	if ($run->num_rows>0) {
	$response['message'] = "Email Already Registered.";
	}else
	{

	$query = "INSERT INTO users (email, name, password) VALUES ('$email', '$name' , '$pass')";
	$res = $con->query($query);

	if($res != false)
	{
		$response["success"] = true;
		$response["message"] = "Congratulation your are registered Successfully";
	}
	else
	{
		$response["message"] = "Something went wrong while registering";
	}

}
	
}
else {
	
		$response["message"] = "Something went wrong while registering";
}

echo json_encode($response);


?>