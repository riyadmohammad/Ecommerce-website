<?php
require_once('home.php');
class Children
{
	function __construct()
	{
		?>
		<html>
		<head><title>Children FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<form action="children.php" method="POST">
		<?php
		Home::Header("customer");
		Home::Subcategory("3");
		Home::Productbycategory("3");
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
		<form action="children.php" method="POST">
		<?php
		Home::headeradmin();
		Home::Header("customer");
		Home::Subcategory("3");
		Home::Productbycategory("3");
		Home::Footer();
	}
}
	if($_SESSION["ut_id"]==1)
{
	Children::adminheader();
}
else
{
	$test=new Children();
}
?>