<?php
require_once('home.php');
class Cart
{
	function __construct()
	{
		Home::Header("customer");
	}
	public static function adminheader()
	{		
		Home::headeradmin();
		Home::Header("customer");
	}
	public function carttable()
	{
		?>
		<form action="addcart.php" method="POST">
		<div class="container2">
		<section>
		<div class="grid2">

		<br/>
		<html>
		<head>
		<style>
		table{
		font-family:arial,sans-serif;
		border-collapse:collapse;
		width:100%;
		}
		td,th{
		border:1px solid #dddddd;
		text-align:left;
		padding:8px;
		}
		tr:nth-child(even){
		background-color:#dddddd;
		}
		</style>
		</head>
		<table>
		<tr>
		<th>Item Name</th>
		<th>Quantity</th>
		<th>Price</th>
		<th>Total Price</th>
		<th>Action</th>
		</tr>
		</table>
		<br>
		<br>
		<input type="submit" class="button" name="continue" value="continue Shopping">
				
		<input type="submit" class="button" name="checkout" value="Check Out"/>
		<br>
		<br>
		</html>
		</div>
		</section>
		</div>
		</form>
		<?php
	}
}
if($_SESSION["ut_id"]==1)
{
	Cart::adminheader();
	Cart::carttable();
	Home::Footer();
}
else
{
	$test=new Cart();
	Cart::carttable();
	Home::Footer();
}


?>

