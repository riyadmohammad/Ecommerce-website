<?php
require_once('home.php');
class Shirts
{
	function __construct()
	{
		?>
		<html>
		<head><title>MEN FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::Header("customer");
		Home::Subcategory("1");
		Home::Productbysubcategory("1");
		Home::Footer();
	}
	public static function adminheader()
	{
		?>
		<html>
		<head><title>MEN FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::headeradmin();
		Home::Header("customer");
		Home::Subcategory("1");
		Home::Productbysubcategory("1");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	Shirts::adminheader();
}
else
{
	$test=new Shirts();
}
?>