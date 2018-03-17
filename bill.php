<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>P-N-C GROUP | Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>


</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">P-N-C<span> GROUP</span> <small><span>Manufacturing Relationships. Distributing Quality.</span></small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
         <li><a href="index.html"><span>Home Page</span></a></li>
          <li><a href="MPP.html"><span>Mayuri Packers & Printers</span></a></li>
          <li><a href="MI.html"><span>Megha Industries</span></a></li>
          <li><a href="Others.html"><span>Others</span></a></li>
          <li class="active"><a href="contact1.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
     
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          
          <div class="clr"></div>
         
        </div>
        <div class="article">
          
          <div class="clr"></div>
          <form  method="post">
		  <?php
		  error_reporting(E_ALL^E_NOTICE);
		  require "database.php";
		  $bid=$_GET['bid'];
		  $query="select * from buy where id='$bid'";
		  $res=$db->query($query);
		  $result=$res->fetch();
		  
		  $name=$result['Name'];
		  $cont=$result['contact'];
		  $email=$result['emailid'];
		  $shp=$result['address'];
		  $qty=$result['quantity'];
		  $price=$result['price'];
		  
		  ?>
        <table cellspacing="4" cellpadding="4" border="4" width="600" height="500" align="center">
	<tr>
	<td colspan="2" align="center" > 
    <font size ="5"><b><i>BILLING DETAILS:</b></i></font>
	</td>
	</tr>
	
	<tr>
	<td> <b>Name:</B></td>
	<td><?php echo $name;?> </td>
	</tr>
		<tr>
	<td> <b>Contact No.:</b></td>
	<td><?php echo $cont;?> </td>
	</tr>
		<tr>
	<td> <b>Email Address :</b></td>
	<td> <?php echo $email;?></td>
	</tr>
		<tr>
	<td> <b>Shipping Address :</b></td>
	<td> <?php echo $shp;?></td>
	</tr>
		<tr>
	<td> <b>Total Quantity of Tape:</b></td>
	<td> <?php echo $qty;?></td>
	</tr>
		<tr>
	<td> <b>Final Price:</b></td>
	<td> <?php echo $price;?></td>
	</tr>
		
	
	
	</table>
	
          </form>
        </div>
      </div>
	 

      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value=" " type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="index.html"><span>Home Page</span></a></li><br>
          <li><a href="MPP.html"><span>Mayuri Packers & Printers</span></a></li><br>
          <li><a href="MI.html"><span>Megha Industries</span></a></li><br>
          <li><a href="Others.html"><span>Others</span></a></li><br>
          <li class="active"><a href="contact.html"><span>Contact Us</span></a></li><br>
          </ul>
        </div>
	        <div class="gadget">
          
          <div class="clr"></div>
          <ul class="ex_menu">
            
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Services</span> Overview</h2>
        <p>The Print-N-Coat Organization was established in the year 1978.We are the leading and developing manufacturing companies.</p>
        <ul class="fbg_ul">
          <li><a href="#">Printing offset inks & Decorative Paint.</a></li>
          <li><a href="#">BOPP Self adhesive tape.</a></li>
          <li><a href="#">Corrugated Boxes.</a></li>
		   <li><a href="#">Grape Guard Paper.</a></li>
        </ul>
		</div>
		<div class="col c2">
        <h2><span>Map</span></h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7504.2680916196305!2d75.3808474!3d19.87656093392515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91590a832bc5a5ea!2sPrint-N-Coat!5e0!3m2!1sen!2sin!4v1466928870107" width="250" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p><b>JEEVAN MANTRI <br />
		HEAD OFFICE: PRINT-N-COAT <br />
		     </b></p>
        <p class="contact_info"> <span>Address:</span> B-10,MIDC,Chikalthana,Aurangabad<br />
		<span>Pin Code:</span>431003<br />
          <span>Mobile No.:</span> +91-9890150750<br />
          <span>Telephone:</span> 0240 - 2484730<br />
          <span>E-mail:</span> <a href="#">printncoat@in.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">@2016</a>.</p>
      
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
