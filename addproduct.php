<?php
require_once("home.php");
Home::headeradmin();
Home::header();
?>
<html>
<head><title>MEN FASHION</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form action="insertproduct.php" method="POST" enctype="multipart/form-data">
<div class="container2">
<section>

<section>
<div class="grid4">
<br/>
<br/>
<b>Product Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pname" /><br/>
<br/>
<b>Product Quantity:</b>&nbsp;&nbsp;&nbsp;<input type="text" name="pquantity" /><br/>
<br/>
<b>Buying Price:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pbuying_price" /><br/>
<br/>
<b>Selling Price:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pselling_price" /><br/>
<br/>
<b>Product Date:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pdate" /><br/>
<br/>
<b>Product Size:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="psize" /><br/>
<br/>
<b>Description:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pdescrip" /><br/>
<br/>


</div>
</section>

<div class="grid3">
<br/>
<br/>

<fieldset>
<legend>Sub-Category:</legend>
<select name="sct_id">
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetAllSubCategory();
		while($d = mysqli_fetch_assoc($rs))
		{
			echo "<option value='".$d['sct_id']."'>".$d['sct_name']."</option>";
		}
?>
</select>
</fieldset>
<br/>
<input type="file" name="file" value="">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="button" name="add" value="AddProduct">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
</section>
</form>
</div>
</body>
</html>
<?php
Home::Footer();
?>