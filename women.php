<?php
require_once('home.php');
class Women
{
	function __construct()
	{
		?>
		<html>
		<head><title>Women FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::Header("customer");
		Home::Subcategory("2");
		Home::Productbycategory("2");
		Home::Footer();
	}
	public static function adminheader()
	{
		?>
		<html>
		<head><title>Women FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::headeradmin();
		Home::Header("customer");
		Home::Subcategory("2");
		Home::Productbycategory("2");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	Women::adminheader();
}
else
{
	$test=new Women();
}
?>