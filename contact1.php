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
       <script type="text/javascript">
         function validate_form() {
           var x = document.forms["myform"]["name"].value;
           var name= /^[A-Za-z]+$/ ;
           if (x=="" || x==null) {
            alert("Name is required");
            document.getElementById('name').focus();
            return false;
          }
          else if (x != "") {
            var res=x.match(name);
            if (res==null) {
              document.getElementById('name').focus();
              alert("Invalid Name");
              return false;
            }
          }

          var m=document.forms["myform"]["emailaddress"].value;
          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          var res=m.match(mailformat);
          if (res==null) {
            alert("Invalid Email");
            document.getElementById('email').focus();
            return false;
          }

          var z=document.forms["myform"]["mobileno"].value;
          var phoneno = /^\d{10}$/;
          var res=z.match(phoneno);
          if (res==null) {
            alert("Invalid Phone Number");
            document.getElementById('mobileno').focus();
            return false;
          }
          var c=document.forms["myform"]["city"].value;
          var city= /^[A-Za-z]+$/ ;
          if (c!="") {
            var res=c.match(city);
            if (res==null) {
              document.getElementById('city').focus();
              alert("Invalid City Name");
              return false;
            }
          }
         }

       </script>

</script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <a href="admin.php" class="admin">Admin</a>
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
      <div class="slider">
       <div id="coin-slider"> <a href="#"><img src="images/slide22.jpg" width="960" height="360" alt="" /><span><big>BOPP Fasten Tape.</big><br />
          We specialized in offering a wide range of Packaging tapes such as Self Adhesive Paper tape, Self Adhesive Plain BOPP tape & Self Adhesive printed BOPP tape to meet customer and industry most unique requirements.
Our customer base includes companies in a variety of industries which include Bonding, Pasting, Packaging, Branding industry and commercial.
</span></a> <a href="#"><img src="images/slide23.png" width="960" height="360" alt="" /><span><big>Corrugated Boxes.</big><br />
     Corrugated box design is the process of matching design factors for corrugated fiberboard boxes with the functional physical, processing and end-use requirements. Packaging engineers work to meet the performance requirements of a box while controlling total costs throughout the system.</span></a> <a href="#"><img src="images/slide222.jpg" width="960" height="360" alt="" /><span><big>PNC Paints.</big><br />
          
Paint is any liquid, liquefiable, or mastic composition that, after application to a substrate in a thin layer, converts to a solid film. It is most commonly used to protect, color, or provide texture to objects. Paint can be made or purchased in many colors and in many different types, such as watercolor, synthetic, etc.</span></a> </div>
         <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Contact:</span></h2>
          <div class="clr"></div>
         
        </div>
        <div class="article">
          <h2><span>Send us</span> Message</h2>
          <div class="clr"></div>
          <form action="contact.php" name="myform" method="post" id="sendemail" onsubmit="return validate_form()">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
				
                <input id="email" name="emailaddress" class="text" />
              </li>
			   <li>
                <label for="mob">Mobile No. (required)</label>
                <input id="mobileno" name="mobileno" class="text" />
              </li>
			  <li>
                <label for="company">Company</label>
                <input id="company" name="company" class="text" />
              </li>
			  <li>
                <label for="city">City</label>
                <input id="city" name="city" class="text" />
              </li>
              <li>
                <label for="message">Your Message </label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
      </div>
	     
  

      <div class="sidebar">
        <a class="button" href="order.php">Order Now</a>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
              <li><a href="index.html"><span>Home Page</span></a></li><br>
          <li><a href="MPP.html"><span>Mayuri Packers & Printers</span></a></li><br>
          <li><a href="MI.html"><span>Megha Industries</span></a></li><br>
          <li><a href="Others.html"><span>Others</span></a></li><br>
          <li class="active"><a href="contact1.php"><span>Contact Us</span></a></li><br>
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
