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
<th>Category ID</th>
<th>Category Name</th>
</tr>
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetCategory();
		while($d = mysqli_fetch_assoc($rs))
		{		
			echo $str="<tr><td>".$d["ct_id"]."</td><td>".$d["ct_name"]."</td></tr>";
		}
?>
</table>
<br>
<br>
<br>
<table>
<tr>
<th>Subcategory ID</th>
<th>Subcategory Name</th>
<th>Category Name</th>
</tr>
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetAllSubCategory();
		while($d = mysqli_fetch_assoc($rs))
		{		
			echo $str="<tr><td>".$d["sct_id"]."</td><td>".$d["sct_name"]."</td><td>".$d["ct_name"]."</td></tr>";
		}
?>
</table>
<br>
<br>
</body>
</html>
</div>
</section>

</section>

</div>
<?php
Home::Footer();
?>