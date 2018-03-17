
function myfunction(arg_nu,arg_am) {
	var amount=document.getElementById(arg_nu).value;
	var temp;
	if (arg_nu=='nos') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*50000;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}
	}
	else if (arg_nu=='tape') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*2000;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}		
	}
	else if (arg_nu=='tape1') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*3000;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}		
	}
	else if (arg_nu=='tape2') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*4500;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}		
	}
	else if (arg_nu=='box') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*20000;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}		
	}
	else if (arg_nu=='ink') {
		if ( document.getElementById(arg_nu).value >=0 && document.getElementById(arg_nu).value<=5) {
			document.getElementById(arg_am).value=amount*10000;
		}
		else{
			document.getElementById(arg_nu).focus();
			window.alert("Enter quantity between 0 to 5");
		}		
	}
	temp=Number(document.getElementById('nos_am').value) + Number(document.getElementById('tape_am').value) 
				+ Number(document.getElementById('tape1_am').value)  + Number(document.getElementById('tape2_am').value)
				 + Number(document.getElementById('box_am').value) + Number(document.getElementById('ink_am').value);
	
	document.getElementById('total_am').value=temp;

	document.getElementById('payment').value=temp;

		if(	
			document.getElementById('nos').value >=0 && document.getElementById('nos').value<=5
			&& document.getElementById('tape').value >=0 && document.getElementById('tape').value<=5
			&& document.getElementById('tape1').value >=0 && document.getElementById('tape1').value<=5
			&& document.getElementById('tape2').value >=0 && document.getElementById('tape2').value<=5
			&& document.getElementById('box').value >=0 && document.getElementById('box').value<=5
			&& document.getElementById('ink').value >=0 && document.getElementById('ink').value<=5
			)
		{
			
			document.getElementById('p_btn').disabled=false;
		}
		else {
			window.alert("All quantities should be between 0 and 5");
			document.getElementById('p_btn').disabled=true;	
		}
		if (
					document.getElementById('nos').value==0 &&
					document.getElementById('tape').value==0 &&
					document.getElementById('tape1').value==0 &&
					document.getElementById('tape2').value==0 &&
					document.getElementById('box').value==0 &&
					document.getElementById('ink').value==0

			) 
		{
			window.alert("At least one quantity!!!");
			document.getElementById('p_btn').disabled=true;
		}


		if(characterCode == 13)
		{
			window.alert("Sairat Jalo Re");
    		return false; // returning false will prevent the event from bubbling up.
		}
		else
		{
    		return true;
		}
}




/* form Validation  */
function validate_form() {

           var x = document.forms["myform"]["name"].value;
           var name= /^[a-zA-Z]+( [a-zA-Z]+)*$/ ;
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

          var m=document.forms["myform"]["email"].value;
          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          var res=m.match(mailformat);
          if (res==null) {
            alert("Invalid Email");
            document.getElementById('email').focus();
            return false;
          }

          var z=document.forms["myform"]["number"].value;
          var phoneno = /^\d{10}$/;
          var res=z.match(phoneno);
          if (res==null) {
            alert("Invalid Phone Number");
            document.getElementById('number').focus();
            return false;
          }
          var address=document.forms["myform"]["address1"].value;
          if (address=="") {
          	alert("Incomplete address Line 1");
          	document.getElementById('address1').focus();
          	return false;
          }
          var address=document.forms["myform"]["address2"].value;
          if (address=="") {
          	alert("Incomplete address Line 2");
          	document.getElementById('address2').focus();
          	return false;
          }

          var c=document.forms["myform"]["city"].value;
          var city= /^[A-Za-z]+$/ ;
  
            var res=c.match(city);
            if (res==null) {
              document.getElementById('city').focus();
              alert("Invalid City Name");
              return false;
            }
     
          var d=document.forms["myform"]["state"].value;
          var city= /^[A-Za-z]+$/ ;
            var res=d.match(city);
            if (res==null) {
              document.getElementById('state').focus();
              alert("Invalid state Name");
              return false;
            }
 
          var z1=document.forms["myform"]["pin"].value;
          var phoneno = /^\d{6}$/;
          var res=z1.match(phoneno);
          if (res==null) {
            alert("Invalid pin Number");
            document.getElementById('pin').focus();
            return false;
          }
     }

