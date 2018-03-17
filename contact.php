<?php
  $name=$_POST['name'];
  $emailaddress=$_POST['emailaddress'];
  $mobileno=$_POST['mobileno'];
  $company=$_POST['company'];
  $city=$_POST['city'];
  $message=$_POST['message'];
  
  require 'database.php';
  
 
  
  $query="INSERT INTO contact VALUES('$name','$emailaddress','$mobileno','$company','$city','$message')";
  $res=$db->exec($query);
  
  if($res)
  {
	    // $to = "snkoli83@gmail.com";
       
    	// $subject = "This is subject";
         
        // $message1 = "This is HTML message";
          
         
        // $header = "From:shravan.mantri@gmail.com \r\n";
         
		//mail($to,$subject,$message1,$header);
		
	    include 'contact1.php';
		echo "<script>alert('Message Sent')</script>";
  }
  ?>