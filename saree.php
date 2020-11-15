<?php
require_once('home.php');
class Saree
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
		Home::Productbysubcategory("4");
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
		Home::Productbysubcategory("4");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	Saree::adminheader();
}
else
{
	$test=new Saree();
}
?>