<?php
require_once("index_model.php");
	$indObj = new IndexModel();
	$temp=$indObj->insertUser($_GET["name"],$_GET["email"],$_GET["gender"],$_GET["phone"],$_GET["address"],$_GET["password"],$_GET["ut_id"]);
	if($temp==1)
	{
		$message = "Your account created successfully";
		echo "
		<script type='text/javascript'>
		alert('$message');
		window.location.href = 'index.php';
		</script>";
	}
	else
	{
		$message = "This email addres already registered";
		echo "
		<script type='text/javascript'>
		alert('$message');
		window.location.href = 'login.php';
		</script>";
	}
?>