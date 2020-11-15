<?php
require_once('home.php');
class WShirts
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
		Home::Productbysubcategory("6");
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
		Home::Productbysubcategory("6");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	WShirts::adminheader();
}
else
{
	$test=new WShirts();
}
?>