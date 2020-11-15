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
<th>User ID</th>
<th>User Name</th>
<th>User Email</th>
<th>User Gender</th>
<th>User Phone</th>
<th>User Address</th>
</tr>
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetAllCustomerInfo();
		
		while($d = mysqli_fetch_assoc($rs))
		{
			
			echo $str="<tr><td>".$d["uid"]."</td><td>".$d["uname"]."</td><td>".$d["uemail"]."</td><td>".$d["ugender"]."</td><td>".$d["uphone"]."</td><td>".$d["uaddress"]."</td></tr>";
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