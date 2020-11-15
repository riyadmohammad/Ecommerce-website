<?php
require_once('home.php');
class Boys
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
		Home::Productbysubcategory("8");
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
		Home::Productbysubcategory("8");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	Boys::adminheader();
}
else
{
	$test=new Boys();
}
?>