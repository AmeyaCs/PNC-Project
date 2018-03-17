<?php
  $dsn = 'mysql:host=localhost;dbname=pnc';
  $username='root';
  $password='';
  
  try
  {
	  $db=new PDO($dsn,$username,$password);
	  
  }
  catch(PDOException $e)
  {
	  print ("error");
	  $error_msg=$e->getmessage();
	  print ("$error_msg");
	  
  }
  ?>