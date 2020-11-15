<?php
require_once('home.php');
class Panjabi
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
		Home::Productbysubcategory("3");
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
		Home::Productbysubcategory("3");
		Home::Footer();
	}
}
if($_SESSION["ut_id"]==1)
{
	Panjabi::adminheader();
}
else
{
	$test=new Panjabi();
}
?>