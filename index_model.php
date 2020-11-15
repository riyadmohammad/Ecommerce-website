<?php
require_once('db.php');
class IndexModel extends DB 
{
	public function GetCategory()
	{
		$q = "select * from category";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetAllSubCategory()
	{
		$q = "select s.*,c.ct_name from subcategory s,category c where c.ct_id=s.ct_id";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetSubCategory($subcat)
	{
		$q = "SELECT * FROM subcategory WHERE ct_id=".$subcat;
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetProductbycategory($p)
	{
	    $q= "select psize,pdescrip,pname,pid,pbuying_price,pquantity,pselling_price,pdate,c.ct_name,s.sct_id,s.sct_name from product ,subcategory s,category c where product.sct_id=s.sct_id and c.ct_id=s.ct_id and c.ct_id=".$p." ORDER BY `pid` DESC";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetProductbysubcategory($p)
	{
		$q = "select psize,pdescrip,pname,pid,pbuying_price,pquantity,pselling_price,pdate,c.ct_name,s.sct_id,s.sct_name from product ,subcategory s,category c where product.sct_id=s.sct_id and c.ct_id=s.ct_id and s.sct_id=".$p." ORDER BY `pid` DESC";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetAllProductbysubcategory()
	{
		$q = "select psize,pdescrip,pname,pid,pbuying_price,pquantity,pselling_price,pdate,c.ct_name,s.sct_id,s.sct_name from product ,subcategory s,category c where product.sct_id=s.sct_id and c.ct_id=s.ct_id";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function insertUser($name,$email,$gender,$phone,$address,$password,$ut_id)
	{
		$q = "INSERT INTO `user` (`uname`, `uemail`, `ugender`, `uphone`, `uaddress`, `upassword`, `ut_id`) VALUES ('".$name."', '".$email."', '".$gender."', '".$phone."', '".$address."', '".$password."', '".$ut_id."')";
		if(mysqli_query($this->con,$q))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function insertProduct($pname,$pquantity,$pbuying_price,$pselling_price,$pdate,$sct_id,$psize,$pdescrip)
	{
		$q = "INSERT INTO `product` (`pname`, `pquantity`, `pbuying_price`, `pselling_price`, `pdate`, `sct_id`, `psize`, `pdescrip` ) VALUES ('".$pname."', '".$pquantity."', '".$pbuying_price."', '".$pselling_price."', '".$pdate."', '".$sct_id."', '".$psize."', '".$pdescrip."')";
		if(mysqli_query($this->con,$q))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function insertCat($cat_name)
	{
		$q = "INSERT INTO `category` (`ct_name`) VALUES ('".$cat_name."')";
		if(mysqli_query($this->con,$q))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function insertSubCat($cat_id,$subcat_name)
	{
		$q = "INSERT INTO `subcategory` (`ct_id`,`sct_name`) VALUES ('".$cat_id."','".$subcat_name."')";
		if(mysqli_query($this->con,$q))
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	public function GetProductInfo($p)
	{
		$q = "SELECT * FROM product WHERE pid=".$p;
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function GetAllCustomerInfo()
	{
		$q = "SELECT * FROM `user` WHERE ut_id=2";
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function check_login($e, $p)
	{
		$q ="SELECT * FROM user WHERE uemail='".$e."' and upassword='".$p."'";
		$r = mysqli_query($this->con,$q);
		if($r==false)
		{
			return 0;
		}
		else
		{
			return $r;
		}
	}
	public function search_product($s)
	{
		$q ="SELECT * FROM product WHERE pid=".$s;
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function update_product($a,$b,$c,$d,$e,$f,$g,$h)
	{
		$q="UPDATE `product` SET `pname` = '".$b."', `pquantity` = '".$c."', `pbuying_price` = '".$d."', `pselling_price` = '".$e."', `pdate` = '".$f."', `psize` = '".$g."', `pdescrip` = '".$h."' WHERE `product`.`pid` ='".$a."'";
		if(mysqli_query($this->con,$q))
		{		
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function update_category($a,$b)
	{
		$q="UPDATE `category` SET `ct_name` = '".$b."' WHERE `category`.`ct_id` ='".$a."'";
		if(mysqli_query($this->con,$q))
		{		
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function update_subcategory($a,$b,$c)
	{
		$q="UPDATE `subcategory` SET `sct_name` = '".$b."', `ct_id` = '".$c."' WHERE `subcategory`.`sct_id` ='".$a."'";
		if(mysqli_query($this->con,$q))
		{		
			return 1;
		}
		else
		{
			return 0;
		}
	}
	public function delete_product($a)
	{
		$q="DELETE from product where pid=".$a;
		if(mysqli_query($this->con,$q))
				{		
						return 1;
				}
				else
					{
						return 0;
					}
	}
	public function delete_category($a)
	{
		$q="DELETE from category where ct_id=".$a;
		if(mysqli_query($this->con,$q))
				{		
						return 1;
				}
				else
					{
						return 0;
					}
	}
	public function delete_subcategory($a)
	{
		$q="DELETE from subcategory where sct_id=".$a;
		if(mysqli_query($this->con,$q))
				{		
						return 1;
				}
				else
					{
						return 0;
					}
	}
	public function search_category($s)
	{
		$q ="SELECT * FROM category WHERE ct_id=".$s;
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	public function search_subcategory($subcat)
	{
		$q = "SELECT * FROM subcategory WHERE sct_id=".$subcat;
		$r = mysqli_query($this->con,$q);
		return $r;
	}
	
}