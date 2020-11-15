<?php
require_once('index_model.php');
		$indObj = new IndexModel();
		$rs = $indObj->check_login($_POST['email'],$_POST['password']);
		while($d= mysqli_fetch_assoc($rs))
		{	
			$_SESSION["uname"] = $d['uname'];
			$_SESSION["uid"] = $d['uid'];
			$_SESSION["ut_id"] = $d['ut_id'];
			if($_SESSION["ut_id"]==1 )
			{
				header('Location: admin.php');
			}
			else
			{
				header('Location: index.php');
			}			
		}		
?>