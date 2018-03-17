<?php

error_reporting(E_ALL^E_NOTICE);
require 'database.php';
  $quantity=$_POST['quantity'];
  $pic=$_POST['pic'];
  $name=$_POST['Name'];
  $emailaddress=$_POST['emailaddress'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $cardno=$_POST['cardno'];
  $ed=$_POST['ed'];
  $cvv=$_POST['cvv'];
  
  //echo "$quantity $pic $name $emailaddress $contact $address $CARDNO $DATE $CVC";
  function getid()
  {
	  require "database.php";
  $q="select max(id) from buy";
  $r=$db->query($q);
  $p=$r->fetch();
  $id=$p['max(id)'];
  $id=$id+1;
  return $id;
  }
  $b=getid();
  
  $query="INSERT INTO buy VALUES($b,'$quantity','$pic','$name','$emailaddress','$contact','$address','CAsh On Delivery','$cardno','$ed','$cvv',($quantity*1000))";
  $res=$db->exec($query);
  if($res)
  {
	    
		echo "<script>alert('Order Placed')</script>";
		header("Location: /project/bill.php?bid=$b");
  }
  ?>