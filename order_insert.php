<?php
 	include 'connection.php';

//-------Insert into Customer_Details--------------------
 	$query="INSERT INTO `customer_detail`(`customer_name`, `email`, `contact_no`, `address`, `city`, `state`, `pin`, `total_payment`) 
 			VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['number']."','".$_POST['address1']."','".$_POST['city']."',
 				'".$_POST['state']."','".$_POST['pin']."','".$_POST['payment']."')";

	$sql=mysqli_query($link,$query) or die(mysqli_error($link)) ;

//==============================================================================================================================================
//	------Insert into orders----------------------------
	$sub_query1= mysqli_query($link,"select max(customer_id) from customer_detail") or die(mysqli_error($link));
	$res=mysqli_fetch_row($sub_query1);

	$dt= date("Y-m-d");	
	$query1="INSERT INTO orders VALUES('',$res[0],'$dt','".$_POST['payment']."')";
	$sql1=mysqli_query($link,$query1) or die(mysqli_error($link)) ;

//==============================================================================================================================================

//	-----------Insert into Order_details-----------------
	$sub_query2=mysqli_query($link,"select max(order_no) from orders");
	$res=mysqli_fetch_row($sub_query2);

	$var1=$_POST['ggp_1000'];
	$var2=$_POST['ct_8'];
	$var3=$_POST['ct_12'];
	$var4=$_POST['ct_18'];
	$var5=$_POST['box_1'];
	$var6=$_POST['ink_1'];

	if ($var1>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'ggp_1000',$var1)") or die(mysqli_error($link));
	}
	if ($var2>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'ct_8',$var2)") or die(mysqli_error($link));
	}
	if ($var3>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'ct_12',$var3)") or die(mysqli_error($link));
	}
	if ($var4>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'ct_18',$var4)") or die(mysqli_error($link));
	}
	if ($var5>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'box_1',$var5)") or die(mysqli_error($link));
	}
	if ($var6>0) {
		$query2=mysqli_query($link,"INSERT INTO Order_detail VALUES('',$res[0],'ink_1',$var6)") or die(mysqli_error($link));
	}

//==============================================================================================================================================

//--------------Update Product Table-------------------
	if ($var1>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var1 WHERE product_id=='ggp_1000'");
	}
	if ($var2>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var2 WHERE product_id=='ct_8'");
	}
	if ($var3>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var3 WHERE product_id=='ct_12'");
	}
	if ($var4>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var4 WHERE product_id=='ct_18'");
	}
	if ($var5>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var5 WHERE product_id=='box_1'");
	}
	if ($var6>0) {
		$query2=mysqli_query($link,"UPDATE Order_detail SET available_units=available_units-$var6 WHERE product_id=='ink_1'");
	}
?>