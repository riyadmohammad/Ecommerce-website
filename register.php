<?php
require_once('home.php');
require_once('index_model.php');
Home::Header("customer");
	
?>

<div class="container2">
<section>
<div class="gridmain">
<section>
<div class="grid3">
<h2 >Register</h2>
</div>
</section>
<section>
<div class="grid3">
<b>YOUR PERSONAL DETAILS</b>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>Name: </b><input type="text" id="name" style="width:200px"/>
</div>
</section>
</br></br>
<section>
<div class="grid3">
<b>Email: </b><input type="text" id="email" style="width:200px"/>
</div>
</section>
</br>
<section>
<div class="grid3" >
<fieldset style="width:250px">
<legend align="center">Gender</legend>
<input type="radio" value="male" id="g1" name="gender"/>Male &nbsp 
<input type="radio" value="female" id="g2" name="gender"/>Female &nbsp 
<input type="radio" value="others" id="g3" name="gender"/>Others
</fieldset>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>YOUR CONTACT INFORMATION</b>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>Phone Number: </b><input type="text" id="phnno" style="width:140px"/>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>Address: </b><input type="text" id="txtaddress" style="width:140px"/>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>YOUR PASSWORD</b>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password: </b><input type="password" id="password" style="width:140px"/>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<b>Confirm Password: </b><input type="password" id="conpass" style="width:140px"/>
</div>
</section>
<Section>
<div class="grid1">
</br>
</br>
</div>
</section>
<section>
<div class="grid3">
<button type="submit" onclick="checkform()" style="width:100px">Sign Up</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
</section>
<script type="text/javascript">
function checkform()
{
	var nam=document.getElementById("name").value;
	var emal=document.getElementById("email").value;
	var phno=document.getElementById("phnno").value;
	var address=document.getElementById("txtaddress").value;
	var password=document.getElementById("password").value;
	var gndr="";
		if(document.getElementById("g1").checked)
		{
			var gndr=document.getElementById("g1").value;
		}
		if(document.getElementById("g2").checked)
		{
			var gndr=document.getElementById("g2").value;
		}
		if(document.getElementById("g3").checked)
		{
			var gndr=document.getElementById("g3").value;
		}
	  if(nam=="")
	  {
		  alert("Enter correct full name");
	  }
	  else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emal)))
	  {
		  alert("Enter correct email address");
	  }
	  else if(gndr=="")
	  {
		  alert("Enter gender");
	  }
	  else if(!/^[0-9]{11}$/.test(phno))
	  {
		  alert("Enter correct Phone Number");
	  }
	  else if(address=="")
	  {
		  alert("Enter Address");
	  }
	  else if(password != document.getElementById("conpass").value || password == "" || document.getElementById("conpass").value=="")
	  {
		  alert("Enter correct password in both place");
	  }
	  else
	  {
		  window.location.href = "insertUser.php?name=" + nam + "&email=" + emal +"&gender="+gndr+"&phone="+phno+"&address="+address+"&password="+password+"&ut_id="+2+"&pressed=Yes";
	  }
}
</script>
</div>
</section>
<?php
Home::Footer();
?>