<?php
require_once("home.php");
Home::headeradmin();
Home::header();
?>


<div class="container2">
<section>

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
<th>Product ID</th>
<th>Product Name</th>
<th>Product Quantity</th>
<th>Product Buying Price</th>
<th>Product Selling Price</th>
<th>Product Date</th>
<th>Subcategory Name</th>
<th>Product Size</th>
<th>Product Description</th>
</tr>
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetAllProductbysubcategory();
		
		while($d = mysqli_fetch_assoc($rs))
		{
			
			echo $str="<tr><td>".$d["pid"]."</td><td>".$d["pname"]."</td><td>".$d["pquantity"]."</td><td>".$d["pbuying_price"]."</td><td>".$d["pselling_price"]."</td><td>".$d["pdate"]."</td><td>".$d["sct_name"]."</td><td>".$d["psize"]."</td><td>".$d["pdescrip"]."</td></tr>";
		}
?>
</table>
<br>
<br>
</body>
</html>
</div>
</section>

<div class="grid3">


</div>
</section>

</section>


</div>



<?php
Home::Footer();
?>