<?php
require_once("index_model.php");
require_once("home.php");
class Editproduct
{
	function __construct()
	{
		Home::headeradmin();
		Home::header();
	}
	public function searchproduct($pi="",$pn="",$pq="",$pbp="",$psp="",$pdate="",$ps="",$pd="")
	{
		$_SESSION['pid']=$pi;
		?>
		<html>
		<head><title>MEN FASHION</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		</head>
		<body>
		<form action="editproduct.php" method="POST">
		<div class="container2">
		<section>
		
		<div class="grid1">
		<br/>
		<br/>
		<b>Product Id:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="pid" value="<?php echo $pi;?>" disabled /><br/>
		<br/>
		<b>Product Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pname" value="<?php echo $pn;?>"/><br/>
		<br/>
		<b>Product Quantity:</b>&nbsp;&nbsp;&nbsp;<input type="text" name="pquantity" value="<?php echo $pq;?>"/><br/>
		<br/>
		<b>Buying Price:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pbuying_price" value="<?php echo $pbp;?>"/><br/>
		<br/>
		<b>Selling Price:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pselling_price" value="<?php echo $psp;?>"/><br/>
		<br/>
		<b>Product Date:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pdate" value="<?php echo $pdate;?>"/><br/>
		<br/>
		<b>Product Size:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="psize" value="<?php echo $ps;?>"/><br/>
		<br/>
		<b>Description:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pdescrip"value="<?php echo $pd;?>"/><br/>
		<br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" class="button" name="update" value="Update product">
		
		<input type="submit" class="button" name="delete" value="Delete Product"/>
		</div>
		<div class="grid23">
		<br/>
		<br/>
		
		<b>Search By Product Id:</b><input type="text" value="" id="src" name="src"/>
		
		<input type="submit" class='button' id='search' name='search' value="Search"/>
		
		
		</div>
		
		

		</section>

		</div>
		</form>
		</body>
		</html>
		<?php
	}
	
}
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
 else if(isset($_POST['update']))
{
		$indObj = new IndexModel();
		$r=$indObj->update_product($_SESSION['pid'],$_POST['pname'],$_POST['pquantity'],$_POST['pbuying_price'],$_POST['pselling_price'],$_POST['pdate'],$_POST['psize'],$_POST['pdescrip']);
		if($r==1)
		{
			$message="product updated";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editproduct.php');
			unset($_SESSION['pid']);
		}
		else
		{
				$message="product can not be updated";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editproduct.php');
					unset($_SESSION['pid']);
		}
					
}
else if(isset($_POST['delete']))
{
		$indObj = new IndexModel();
		$r=$indObj->delete_product($_SESSION['pid']);
		if($r==1)
		{
			$message="product deleted";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editproduct.php');
			unset($_SESSION['pid']);
		}
		else
		{
				$message="product can not be deleted";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editproduct.php');
					unset($_SESSION['pid']);
		}
					
}
else
{
	$test=new Editproduct();
	Editproduct::searchproduct();
	Home::Footer();
}
?>