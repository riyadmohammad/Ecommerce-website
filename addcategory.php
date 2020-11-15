<?php
require_once("home.php");
Home::headeradmin();
Home::header();
?>
<form action="insertproduct.php" method="POST">
<div class="container2">
<section>

<section>
<div class="grid2">
<br/>
<fieldset>
<legend>Category:</legend>
<select name="cat_id">
<?php
		$indObj = new IndexModel();
		$rs = $indObj->GetCategory();
		while($d = mysqli_fetch_assoc($rs))
		{
			echo "<option value='".$d['ct_id']."'>".$d['ct_name']."</option>";
		}
?>
</select>
</fieldset>

<br/>
<b>Sub-category Name:&nbsp;&nbsp;
<b/><input type="text" name="addsubcatname" /><br/>
<br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="button" name="addSubCat" value="Add Sub-Category"/>
<br/>
<br/>
</div>
</section>

<div class="grid45">
<br/>
<br/>
<b>Category Name:<b/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;<input type="text" name="addcat2" /><br/>
<br/>
<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" class="button" name="addCat" value="Add Category"/>


</div>

</div>
</section>



</div>
</form>
<?php
Home::Footer();
?>