<?php
require_once('home.php');
class Login
{
	
	function __construct()
	{
		Home::Header("customer");
		Home::Loginpagedesign();
		Home::Footer();
	}
}
	$test=new Login();

?>