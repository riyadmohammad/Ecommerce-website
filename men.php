<?php
require_once('home.php');
class Men
{
	function __construct()
	{
		Home::Header("customer");
		Home::Subcategory("1");
		Home::Productbycategory("1");
		Home::Footer();
	}
	public static function adminheader()
	{
		Home::headeradmin();
		Home::Header("customer");
		Home::Subcategory("1");
		Home::Productbycategory("1");
		Home::Footer();
	}
}
if($_SESSION["ut_id"]==1)
{
	Men::adminheader();
}
else
{
	$test=new Men();
}
?>

