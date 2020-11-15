<?php
require_once("index_model.php");
	if(isset($_POST['add']))
	{
		$indObj = new IndexModel();
		if($_POST["pname"]==""||$_POST["pquantity"]==""||$_POST["pbuying_price"]==""||$_POST["pselling_price"]==""||$_POST["pdate"]==""||$_POST["sct_id"]==""||$_POST["psize"]==""||$_POST["pdescrip"]=="")
		{
			$message = "This product cannot inserted";
			echo "
			<script type='text/javascript'>
			alert('$message');
			window.location.href = 'addproduct.php';
			</script>";
		}
		else
		{
			$temp=$indObj->insertProduct($_POST["pname"],$_POST["pquantity"],$_POST["pbuying_price"],$_POST["pselling_price"],$_POST["pdate"],$_POST["sct_id"],$_POST["psize"],$_POST["pdescrip"]);
			if($temp=="1")
			{
				$message = "Product Inserted successfully";
				/*
				$image = $_FILES['file']['name'];
				$temp_name = $_FILES["file"]["tmp_name"];
				$file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
				$file_size =$_FILES['file']['size'];
				$expensions= array("jpeg","jpg","png","gif");
				if(in_array($file_ext,$expensions)=== false)
				{
					$errors[]="extension not allowed, please choose a JPEG or PNG file.";
				}
				if($file_size > 2097152)
				{
					$errors[]='File size must be excately 2 MB';
				}
				if(empty($errors)==true)
				{
					move_uploaded_file($temp_name,$_SERVER['DOCUMENT_ROOT']."/"."gripOffers/Store_Brand/store_admin/images/".$image);
					echo "Your file upload successfully.";
				}
				else
				{
						 print_r($errors);
				}
				*/
				echo "
				<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addproduct.php';
				</script>";
			}
			else
			{
				$message = "This product already existed";
				echo "
				<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addproduct.php';
				</script>";
			}
		}
	}
	else if(isset($_POST['addCat']))
	{
		$indObj = new IndexModel();
		if($_POST["addcat2"]=="")
		{
			$message = "This Category cannot inserted";
			echo "
			<script type='text/javascript'>
			alert('$message');
			window.location.href = 'addcategory.php';
			</script>";
		}
		else
		{
			$temp=$indObj->insertCat($_POST["addcat2"]);
			if($temp=="1")
			{
				$message = "Category Inserted successfully";
				echo "
				<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addcategory.php';
				</script>";
			}
			else
			{
				$message = "This Category already existed";
				echo "
	`			<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addcategory.php';
				</script>";
			}
		}
	}
	else if(isset($_POST['addSubCat']))
	{
		$indObj = new IndexModel();
		if($_POST["addsubcatname"]=="")
		{
			$message = "This Sub Category cannot inserted";
			echo "
			<script type='text/javascript'>
			alert('$message');
			window.location.href = 'addcategory.php';
			</script>";
		}
		else
		{
			$temp=$indObj->insertSubCat($_POST["cat_id"],$_POST["addsubcatname"]);
			if($temp=="1")
			{
				$message = "Category Inserted successfully";
				echo "
				<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addcategory.php';
				</script>";
			}
			else
			{
				$message = "This Category already existed";
				echo "
	`			<script type='text/javascript'>
				alert('$message');
				window.location.href = 'addcategory.php';
				</script>";
			}
		}
	}
?>