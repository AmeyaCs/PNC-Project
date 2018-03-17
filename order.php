<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Now</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--	<link rel="stylesheet" type="text/css" href="\project\css\order_css.css">-->
	<script type="text/javascript" src="\project\js\order_js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="\project\css\bootstrap.min.css">
	<link rel="stylesheet" href="\project\css\bootstrap_override.css">
  	<script src="\project\js\jquery.min.js"></script>
  	<script src="\project\js\bootstrap.min.js"></script>
</head>
<body>
<div class="container text-justify">
  <form class="form-horizontal" onsubmit="return validate_form()" name="myform" method="POST" action="order_insert.php">
  	<div class="row">
  		<div class="col-sm-12 text-center"><h1><strong>Make Your Order</h1></strong></div>
  	</div>
  	<div class="row">
  		<div class="col-sm-6 text-center text-uppercase"><h3><strong>Products</strong></h3></div>
  		<div class="col-sm-2 text-center text-uppercase"><h3><strong>Quantity</strong></h3></div>
  		<div class="col-sm-2 text-center text-uppercase"><h3><strong>Amount</h3></strong></div>
  	</div>
  	<div class="row">
  		<div class="col-sm-4 text-right"><h3><strong>Grep Guard Paper:</strong></h3></div>
  		<div class="col-sm-2"></div>
  		<div class="col-sm-2 text-center">Enter Quantity between 0 and 5</div>
  		<div class="col-sm-2"></div>
  	</div>  	
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right"><label for="nos"> 1000 NOS:</label></div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="nos" name="ggp_1000" min="0" max="5" value="0" onchange="myfunction('nos','nos_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="nos_am" readonly="">
	  	</div>
  	</div>    
  	<div class="row">
  		<div class="col-sm-4 text-right"><h3><strong>Cello Tape:</strong></h3></div>
  	</div>
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right">8mm(100):</div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="tape" name="ct_8" min="0" max="5" value="0" onchange="myfunction('tape','tape_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="tape_am" readonly="">
	  	</div>
  	</div> 
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right">12mm(100):</div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="tape1" name="ct_12" min="0" max="5" value="0" onchange="myfunction('tape1','tape1_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="tape1_am" readonly="">
	  	</div>
  	</div> 
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right">18mm(100):</div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="tape2" name="ct_18" min="0" max="5" value="0" onchange="myfunction('tape2','tape2_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="tape2_am" readonly="">
	  	</div>
  	</div>  	 	 	
  	<div class="row">
  		<div class="col-sm-4 text-right"><h3><strong>Boxes:</strong></h3></div>
  	</div>
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right">1 Ton:</div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="box" name="box_1" min="0" max="5" value="0" onchange="myfunction('box','box_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="box_am" readonly="">
	  	</div>
  	</div>  
  	<div class="row">
  		<div class="col-sm-4 text-right"><h3><strong>Inks:</strong></h3></div>
  	</div>
  	<div class="row">
  		<div class="col-sm-4"></div>
	  	<div class="col-sm-2 text-right">1 Drum:</div>
	  	<div class="col-sm-2">
	  		<input type="number" class="form-control" id="ink" name="ink_1" min="0" max="5" value="0" onchange="myfunction('ink','ink_am')">
	  	</div>
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" name="amount" id="ink_am" readonly="">
	  	</div>
  	</div>  	
  	<div class="row t1">
  		<div class="col-sm-4 text-right"><h4><strong>Total Amount:</strong></h4></div>
	  	<div class="col-sm-2"></div>
	  	<div class="col-sm-2"></div>	
	  	<div class="col-sm-2">
	  		<input type="text" class="form-control" id="total_am" name="amount" readonly="">
	  	</div>
  	</div>  
  	<div class="row t1"> 
	  	<div class="col-sm-12 text-center">
	  		<button type="button" id="p_btn"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="myfunction('payment','p_btn')">Proceed</button>
	  	</div>
	  </div>
	
<!-- modal form starts here -->
	<div class="">
	  <!-- Trigger the modal with a button -->
	  
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog modal-lg">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">P-N-C Group</h4>
	        </div>
	        <div class="modal-body">
	          	
<!-- Main Modal Form starting -->
	          	<div class="">
<!--		        	<form class=""> -->
						<fieldset>

						<!-- Form Name -->
						<div class="form-group ">
								<legend class="col-md-12">Fill Up Details</legend>
						</div>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="name">Your Full Name:</label>  
						  <div class="col-md-6">
						  <input id="name" name="name" type="text" placeholder="Enter Your Name" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="email">Email:</label>  
						  <div class="col-md-6">
						  <input id="email" name="email" type="text" placeholder="Enter Your Email" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="number">Contact:</label>  
						  <div class="col-md-6">
						  <input id="number" name="number" type="text" placeholder="Contact Number" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="address1">Address:</label>  
						  <div class="col-md-6">
						  <input id="address1" name="address1" type="text" placeholder="Address Line1" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="address2"></label>  
						  <div class="col-md-6">
						  <input id="address2" name="address2" type="text" placeholder="Address Line2" class="form-control input-md">
						    
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-md-2 control-label" for="city">City:</label>  
						  <div class="col-md-6">
						  <input id="city" name="city" type="text" placeholder="Enter Your City" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="state">State:</label>  
						  <div class="col-md-6">
						  <input id="state" name="state" type="text" placeholder="Enter Your State" class="form-control input-md">
						    
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label" for="pin">Pin:</label>  
						  <div class="col-md-6">
						  <input id="pin" name="pin" type="text" placeholder="Enter Pincode" class="form-control input-md">
						    
						  </div>
						</div>

						<div class="form-group">
							<label class="col-md-2 control-label" for="payment">Total Payment:</label>
							<div class="col-md-6">
						  		<input id="payment" name="payment" type="text" readonly="" class="form-control input-md">
						    	
						  	</div>
						</div>
						
						<!-- Button (Double) -->
						<div class="form-group">
						  <label class="col-md-3 control-label" for="submit"></label>
						  <div class="col-md-8 t2">
						    <input type="submit" name="submit" value="Confirm" class="btn btn-success">
						    <button type="button" class="btn btn-danger" data-dismiss="modal">Edit</button>
						  </div>
						</div>

						</fieldset>
<!--					</form> -->
					<!-- Text input-->
				</div>
	        
<!-- Main Modal form Ending  -->
	        </div>
	        <div class="modal-footer">
	        	<button id="cancle" name="cancle " class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>  			  

  </form>
</div>

</body>