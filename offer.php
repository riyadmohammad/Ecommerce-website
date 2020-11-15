<?php
require_once("home.php");
if($_SESSION['ut_id']==1)
{
	Home::headeradmin();
}
Home::Header();
?>

<div class="container2">
<section>
<div class="grid23">
<img src="HomepageIMG/summer-sale-2017_landing_page_2.png" width="100%" height="250px"/></br>

</div>
<div align="left" class="grid4">
<br/>
<br/>
<br/>
<h3>Upto 60%</h3><br/>
<br/>
<br/>
<br/>
<br/>
<h>*Condition Apply</h>
</div>
</section>

<br/>
<br/>

<section>
<div class="grid23">
<img src="HomepageIMG/Offer.jpg" width="100%" height="250px"/></br>

</div>
</section>
</div>

<?php
Home::Footer();
?>