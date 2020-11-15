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
<form action="">
<b>From:</b>
  <input type="date">
</form>

</div>
</section>

<div class="grid3">
<br/>
<form action="">
<b>To:</b>
  <input type="date">&nbsp;&nbsp;&nbsp;
  <input type="button" class="button" name="submit" value="Submit">

</form>

</div>
</section>

</section>


</div>

<?php
Home::Footer();
?>