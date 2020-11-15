<?php
require_once('home.php');
class Girls
{
	function __construct()
	{
		?>
		<html>
		<head><title>Children FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::Header("customer");
		Home::Subcategory("3");
		Home::Productbysubcategory("9");
		Home::Footer();
	}
	public static function adminheader()
	{
		?>
		<html>
		<head><title>Children FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<?php
		Home::headeradmin();
		Home::Header("customer");
		Home::Subcategory("3");
		Home::Productbysubcategory("9");
		Home::Footer();
	}
}
if($_SESSION["ut_id"]==1)
{
	Girls::adminheader();
}
else
{
	$test=new Girls();
}
?>