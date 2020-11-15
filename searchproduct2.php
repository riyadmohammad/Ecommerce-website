<?php
require_once("index_model.php");
require_once("deleteproduct.php");
if(isset($_POST['search']))
{
	$indObj = new IndexModel();
	$rs = $indObj->search_product2($_POST['src']);
	while($d = mysqli_fetch_assoc($rs))
	{
		$test=new deleteproduct();
		deleteproduct::searchproduct($d['pid'],$d['pname'],$d['pquantity'],$d['pbuying_price'],$d['pselling_price']);
		Home::Footer();
	}
}

?>