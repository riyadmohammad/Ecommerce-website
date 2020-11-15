<?php

require_once('index_model.php');
class Home 
{
	public static function Header($title="")
	{
	?>
		<html>
		<head><title>DesiFashion.com</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="style2.css"/>
		</head>
		<body>
		<div class="container">
		<section>
		<div class="menu">
		<?php
			$indObj = new IndexModel();
			$rs = $indObj->GetCategory();
			while($d = mysqli_fetch_assoc($rs))
			{
				echo "<a href='".$d["ct_name"].".php' style='text-decoration:none;'><span>".$d["ct_name"]."</span></a> &nbsp &nbsp &nbsp";
			}
		?>
		<a href="offer.php" style="text-decoration:none;"><span>OFFER</span></a>  &nbsp &nbsp &nbsp
		
		</div>
		
		<div class="grid3">
		<?php
		if($_SESSION['ut_id']==1)
		{
			echo "<a href='admin.php'><img src='HomepageIMG/logo.png' width='120px' height='40px'/></a>";
		}
		else
		{
			echo "<a href='index.php'><img src='HomepageIMG/logo.png' width='120px' height='40px'/></a>";
		}
		?>
		</div>
		<div class="grid4">

		<a href="cart.php" style="text-decoration:none;"><img src="HomepageIMG/cart.png" width="60px" height="30px"/></a> &nbsp  &nbsp  &nbsp 
		<?php
		if(isset($_SESSION['uname'])!="" && $_SESSION['uid']!="" && $_SESSION['ut_id']!="")
		{	
			echo "
			<div class='dropdown'>
			<button class='dropbtn'>".$_SESSION['uname']."</button>
			<div class='dropdown-content'>
			<a href='logout.php'>Log Out</a>
			</div>
			</div>";
			//echo "<a href='user.php' style='text-decoration:none;'><b>".$_SESSION['uname']."</b> </a>";
		}
		else
		{
			echo "<a href='login.php' style='text-decoration:none;'><b>Log In</b> </a>";
		}
		?>

		</div>
		</section>
		</div>
		<?php
		
	}
	public static function headeradmin()
	{
		?>
		<html>
		<head><title>DesiFashion.com</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="style2.css"/>
		</head>
		<body>
		
		<div class="container">
		<section>

		<div class="menu2">

		<div class="dropdown">
		  <button class="dropbtn">Product</button>
		  <div class="dropdown-content">
			<a href="addproduct.php" >Add Product</a>
			<a href="editproduct.php">Edit Product</a>
			<a href="showproduct.php">Show Product</a>
		  </div>
		</div>
		<div class="dropdown">
		  <button class="dropbtn">Category</button>
		  <div class="dropdown-content">
			<a href="addcategory.php" >Add Category</a>
			<a href="editcategory.php">Edit Category</a>
			<a href="showcategory.php">Show Category List</a>
		  </div>
		</div>
		<a href="customerinfo.php" style="text-decoration:none;">CUSTOMER INFO</a>

		</div>
		</section>
		</div>
		<?php
	}
	
	public static function Category()
	{
	?>
		<div class="container2">
		<section>
		<?php
			$indObj = new IndexModel();
			$rs = $indObj->GetCategory();
			while($d = mysqli_fetch_assoc($rs))
			{
				echo "<section><div class='img'><p valign='center' align='center'><b>".$d["ct_name"]."</b></p>
				<a href='".$d["ct_name"].".php'><img src='HomepageIMG/".$d["ct_name"].".jpg' width='100%' height='80%'/></a></div></section>";
			}
		?>
		

		</section>
		</div>
		<?php
	}
	public static function Subcategory($subcat)
	{
		?>
			<div class="nevigate">
			<section>
			<div class="catagory">
			<?php
			$indObj = new IndexModel();
			$rs = $indObj->GetSubCategory($subcat);
			while($d = mysqli_fetch_assoc($rs))
			{
				echo "<a href='".$d["sct_name"].".php' style='text-decoration:none;'>".$d["sct_name"]."</a>  &nbsp &nbsp &nbsp &nbsp";
			}
			?>
			</div>
			</section>
			</div>
		<?php
	}
	public static function Productbycategory($p)
	{
		?>
			<div class="container2">
			<section>
			<?php
			$indObj = new IndexModel();
			$rs = $indObj->GetProductbycategory($p);
			while($d = mysqli_fetch_assoc($rs))
			{
				echo "<section><div class='img'><p valign='center' align='center'><b>".$d["pname"]."</b></p>
				<a href='productinfo.php?ct_name=".$d["ct_name"]."&pid=".$d["pid"]."'><img src='".$d["ct_name"]."/".$d["pid"].".jpg' width='100%' height='80%'/></a>
				<b>Price: ".$d["pselling_price"]."TK</b><br><b>Size: ".$d["psize"]."</b></div></section>";
			}
			?>
			</section>
			</div>
		<?php
	}
	public static function Loginpagedesign()
	{
		?>
		<div class="container2">
		<section>
		<div class="gridmain">
		<section>
		<div class="grid3">
		<h2 >WELCOME, PLEASE SIGN IN!</h2>
		</div>
		</section>
		<section>
		<div class="grid3">
		<b>LOGIN WITH EMAIL ADDRESS</b>
		</div>
		</section>
		<Section>
		<div class="grid1">
		</br>
		</br>
		</div>
		</section>
		<form action="check_login.php" method="POST">
		<section>
		<div class="grid3">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>EMAIL: </b><input type="text" name="email" style="width:200px"/>
		</div>
		</section>
		</br></br>
		<section>
		<div class="grid3">
		<b>PASSWORD: </b><input type="password" name="password" style="width:200px"/>
		</div>
		</section>
		</br>
		<section>
		<div class="grid3">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="LOGIN" style="width:100px"/>
		</div>
		</section>
		
		<Section>
		<div class="grid1">
		</br>
		</br>
		</div>
		</section>

		</form>

		
		<Section>
		<div class="grid1">
		</br>
		</br>
		</div>
		</section>
		<form action="register.php" method="POST">
		<section>
		<div class="grid3">
		<h3>Not yet registered? Please sign up here</h3><br/>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="reg" value="Sign up" style="width:200px"/>
		</div>
		</section>
		</form>
		<?php
		
	}
	
	public static function Productbysubcategory($p)
	{
		?>
			<div class="container2">
			<section>
			<?php
			$indObj = new IndexModel();
			$rs = $indObj->GetProductbysubcategory($p);
			while($d = mysqli_fetch_assoc($rs))
			{
				echo "<section><div class='img'><p valign='center' align='center'><b>".$d["pname"]."</b></p>
				<a href='productinfo.php?ct_name=".$d["ct_name"]."&pid=".$d["pid"]."'><img src='".$d["ct_name"]."/".$d["pid"].".jpg' width='100%' height='80%'/></a>
				<b>Price: ".$d["pselling_price"]."TK</b><br><b>Size: ".$d["psize"]."</b></div></section>";
			}
			?>
			</section>
			</div>
		<?php
	}

	public static function Footer()
	{
	?>

		<div class="footer">
		<section>

		<div class="grid1">

		<h>Fashion HQ</h><br/>
		<h>House-23,Road-19</h><br/>
		<h>Nikunju-2,Dhaka-1229</h><br/>
		<h>Email:smokeyemo@gmail.com</h>

		</div>

		<div class="gird2">
		<h>Shipping & Exchange</h><br/>
		<h>Policy</h><br/>
		<h>Terms and Condition</h><br/>
		<h>About Us</h>
		</div>

		<div class="grid3">
		<a href="https://www.facebook.com"><h>Facebook</h></a><br/>
		<a href="https://www.instagram.com/"><h>Instagram<h></a>
		</div>

		<div class ="grid4">
		Payments Method:</br>
		<img src="HomepageIMG/bkash.png" width="80px" height="30px"/></br>
		#017-9073-9989

		</div>
		</section>
		</div>
		
		</body>
		</html>
		<?php
	}
}