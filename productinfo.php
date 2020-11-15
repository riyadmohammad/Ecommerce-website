<?php
require_once('home.php');		
require_once('index_model.php');
if($_SESSION['ut_id']==1)
{
	Home::headeradmin();
}		
Home::Header("customer");
$indObj = new IndexModel();
$rs = $indObj->GetProductInfo($_GET["pid"]);
$d = mysqli_fetch_assoc($rs);
?>
<div class="container2">
<section>
<div class="zoom">
<?php
echo "<img src='".$_GET["ct_name"]."/".$d["pid"].".jpg' height='400px' width='400px'>";
?>
</div>
<div class="grid2">
<?php
echo "<h2 color='blue'>Product Name: ".$d["pname"]."</br>
Price: ".$d["pselling_price"]."TK</br>
Product ID: ".$d["pid"]."</br>
Descripstion : ".$d["pdescrip"]."<br> 
</h2>";
?>
</div>
<div class="grid3">
<br/>
<b>Size:</b>
<?php
	$arr = preg_split("/\-/", $d["psize"]);
	$i=0;
	while($i<count($arr))
	{
		echo "<input type='radio' id='size' name='size' value='".$arr[$i]."'>".$arr[$i]."  &nbsp";
		$i++;
	}
?>

<br>
<br>

  <b>Quantity:&nbsp;<b/><input type="number" id="quantity" name="quantity" min="0" max="10000">
<br/>
<br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" class="button" onclick="checkform()" style="width:100px">Add To Cart</button>
</div>
</section>
<script type="text/javascript">
function checkform()
{
	var quantity=document.getElementById("quantity").value;
	var size=document.getElementById("size").value;
	var pid="<?php echo $d['pid']; ?>";
	var pname="<?php echo $d['pname']; ?>";
	var pselling_price="<?php echo $d['pselling_price']; ?>";
	var ptotalprice=quantity*pselling_price;
	 if(quantity=="" || quantity==0)
	 {
		alert("Enter Quantity");
	 }
	 else
	 {
		 window.location.href = "addcart.php?pid=" + pid + "&pname=" + pname +"&quantity="+quantity+"&pselling_price="+pselling_price+"&ptotalprice="+ptotalprice+"&size="+size+"&button=YES";
	 }
}
</script>

</div>

</body>
</html>
<?php
Home::Footer();
?>