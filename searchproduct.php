<?php
require_once("index_model.php");
require_once("editproduct.php");

if(isset($_POST['search']))
{
	$indObj = new IndexModel();
	$rs = $indObj->search_product($_POST['src']);
	while($d = mysqli_fetch_assoc($rs))
	{
		$test=new Editproduct();
		Editproduct::searchproduct($d['pid'],$d['pname'],$d['pquantity'],$d['pbuying_price'],$d['pselling_price'],$d['pdate'],$d['psize'],$d['pdescrip']);
		Home::Footer();
	}
}

?>