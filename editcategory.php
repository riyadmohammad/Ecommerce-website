<?php
require_once("index_model.php");
require_once("home.php");
class Editcategory
{
	function __construct()
	{
		Home::headeradmin();
		Home::header();
	}
	public function searchproduct($ct_id="",$ct_name="",$sub_id="",$sub_name="",$sct_id="")
	{
		$_SESSION['ct_id']=$ct_id;
		$_SESSION['sub_id']=$sub_id;
		?>
			<form action="editcategory.php" method="POST">
			<div class="container2">
			<section>

			<section>
			<div class="grid2">
			<br/>
			<b>Search By Category Id:</b>
			<input type="text" value="" name="src1">
			<input type="submit" class="button" name="Search" value="Search">
			<br/>
			<br/>
			<b>Category Id:<b/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<input type="text" name="catid1" disabled value="<?php echo $ct_id;?>"/><br/>
			<br/>

			<b>Category Name:<b/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="addcat" value="<?php echo $ct_name;?>"/><br/>
			<br/>
			<br/>
			<br/>
			<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="button" name="updatecat" value="Update Category">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="button" name="deletecat" value="Delete Category">

			<br/>
			<br/>
			</div>
			</section>


			<div class="grid3">
			<br/>
			<b>Search By Sub-Category Id:</b>
			<input type="text" value="" name="src2">
			<input type="submit" class="button" name="searchsub" value="Search">
			<br/>
			<br/>
			<b>Sub-Category Id:<b/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<input type="text" name="sctid" disabled value="<?php echo $sub_id;?>"/><br/>
			<br/>

			<b>Sub-Category Name:<b/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="addsubcat" value="<?php echo $sub_name;?>"/><br/>
			<br/>
			<b>Category ID:<b/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="catid2" value="<?php echo $sct_id;?>"/><br/>
			<br/>
			<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="button" name="updatesubcat" value="Update Sub-Category">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" class="button" name="deletesubcat" value="Delete Sub-Category">

			</div>

			</section>


			</div>
			</form>
			<?php
	}
}
if(isset($_POST['Search']))
{
	$indObj = new IndexModel();
	$rs = $indObj->search_category($_POST['src1']);
	while($d = mysqli_fetch_assoc($rs))
	{
		$test=new Editcategory();
		Editcategory::searchproduct($d['ct_id'],$d['ct_name']);
		Home::Footer();
	}
}
else if(isset($_POST['searchsub']))
{
	$indObj = new IndexModel();
	$rs = $indObj->search_subcategory($_POST['src2']);
	while($d = mysqli_fetch_assoc($rs))
	{
		$test=new Editcategory();
		Editcategory::searchproduct("","",$d['sct_id'],$d['sct_name'],$d['ct_id']);
		Home::Footer();
	}
}
else if(isset($_POST['deletecat']))
{
		$indObj = new IndexModel();
		$r=$indObj->delete_category($_SESSION['ct_id']);
		if($r==1)
		{
			$message="category deleted";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editcategory.php');
			unset($_SESSION['ct_id']);
		}
		else
		{
				$message="this category can not be deleted";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editcategory.php');
					unset($_SESSION['ct_id']);
		}
					
}
else if(isset($_POST['deletesubcat']))
{
		$indObj = new IndexModel();
		$r=$indObj->delete_subcategory($_SESSION['sub_id']);
		if($r==1)
		{
			$message="category deleted";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editcategory.php');
			unset($_SESSION['ct_id']);
		}
		else
		{
				$message="this category can not be deleted";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editcategory.php');
					unset($_SESSION['ct_id']);
		}
					
}
 else if(isset($_POST['updatecat']))
{
		$indObj = new IndexModel();
		$r=$indObj->update_category($_SESSION['ct_id'],$_POST['addcat']);
		if($r==1)
		{
			$message="category updated";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editcategory.php');
			unset($_SESSION['pid']);
		}
		else
		{
				$message="category can not be updated";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editcategory.php');
					unset($_SESSION['pid']);
		}
					
}
else if(isset($_POST['updatesubcat']))
{
		$indObj = new IndexModel();
		$r=$indObj->update_subcategory($_SESSION['sub_id'],$_POST['addsubcat'],$_POST['catid2']);
		if($r==1)
		{
			$message="category updated";
			echo "
					<script type='text/javascript'>
					alert($message);
					</script>";
			header('Location: Editcategory.php');
			unset($_SESSION['pid']);
		}
		else
		{
				$message="category can not be updated";
				echo "
					<script type='text/javascript'>
					alert('$message');
					</script>";
					header('Location: Editcategory.php');
					unset($_SESSION['pid']);
		}
					
}
else
{
$test=new Editcategory();
Editcategory::searchproduct();
Home::Footer();
}
?>