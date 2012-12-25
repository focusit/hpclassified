<?php 
	include "hpclass_dbms.php" ;
?>
<html>
<head>
<title>User Form</title>
<link rel="stylesheet" type="text/css" media="all" href="jquery/lib/js/jquery/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jquery/lib/js/jquery/jsDatePick.min.1.3.js"></script>
<script type="text/javascript" src="jquery/lib/js/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("input#dateofbirth").click(function(){
		new JsDatePick({
			useMode:2,
			target:"dateofbirth",
			dateFormat:"%Y-%m-%d"
		});
	});
	$("input#anniversary").click(function(){
		new JsDatePick({
			useMode:2,
			target:"anniversary",
			dateFormat:"%Y-%m-%d"
		});
	});	
});	
</script>

<script type="text/javascript">
  	function validateEmail(elementValue){  
       var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
	   return emailPattern.test(elementValue);  
     }  
	$(document).ready(function(){
	
	$("select#state").change(function(){
			state=$("select#state").val();
			$.post("srvr_regn.php?flag=distt",{_state:state}, function(result){
      			$("span#spn_distt").html(result);  
  			});
  		});
  $("input#submit").click(function(){
  tname=$("input#tname").val();
  tpassword=$("input#tpassword").val();
  email_id=$("input#email_id").val();
  gender="M";
  if($('#mal').is(':checked'))
  {
  	gender="M";
  }
  else
  {
  	gender="F";
  }
  contact_No=$("input#contact_No").val();
  Address=$("input#Address").val();	 
  state=$("select#state").val();
  distt=$("input#distt_hidden").val(); 
  dateofbirth=$("input#dateofbirth").val();
  anniversary=$("input#anniversary").val();
  
  	noerr=true;
  
   	if(tname.length<1){
		noerr=false;
   		$("span#err_tname").html("Name field can not be empty !");
	}
	else if(tpassword.length<1){
		noerr=false;
		$("span#err_password").html("Password field can not be empty !");	
    }
	else if(!validateEmail(email_id)){
		noerr=false;	
       $("span#err_email_id").html("Email-Id field is not valid !");
	}
	else if(contact_No.length<1){
	 	noerr=false;
         $("span#err_contact_No").html("Contact-No field can not be empty !" );
	}
	else if(Address.length<1){
	 	noerr=false;
      $("span#err_address").html("Address field can not be empty !");
	}
	else if(state=="NS"){
		noerr=false;
        $("span#err_state").html("Select State !");	  
	}
    else if(distt=="NS"){	
		noerr=false;
      $("span#err_distt").html("Distt field can not be empty !");
	}
	else if(dateofbirth.length<1){
		noerr=false;
      	$("span#err_tdateofbirth").html("Date Of Birth field can not be empty !");
	}
 	else if(anniversary.length<1){
		noerr=false;
      	$("span#err_tanniversary").html("Anniversary field can not be empty !");
	}
	else
		noerr=true;

	if (noerr==false){
		return false;
	}
	else
	{
	 	$.post("srvr_regn.php?flag=user_regn",{_tname:tname , _tpassword:tpassword, _email_id:email_id, _gender:gender, _contact_No:contact_No, _Address:Address, _state:state, _distt:distt, _dateofbirth:dateofbirth, _anniversary:anniversary},function(result){
      	$("div#output").html(result);
	});
	}
	}); 
  });
  
</script>
<script type="text/javascript">
  function distt_()
  {
  	document.getElementById('distt_hidden').value=document.getElementById('distt').value;
  }
 </script>

<?php include("header.php");?>
<br />
<body>
<div id="output">Enter Form Correctly</div>
<label><span style="color: #000000"> &nbsp;&nbsp;<br />
Name</span></label>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  
<span style="color: #000000">
<input type="text" name="tname" id="tname" /><span id="err_tname"></span>
<br /><br />
<label>&nbsp;&nbsp;Password </label> &nbsp;&nbsp; 
<input type="password" name="tpassword" id="tpassword" />   
<span id="err_password"></span><br /><br />
<label>&nbsp;&nbsp;E-mail ID</label>&nbsp;&nbsp;&nbsp;&nbsp;   
<input type="text" name="email_id" id="email_id" />
<span id="err_email_id"></span><br />
<label>&nbsp;&nbsp;Gender</label> 
<input name="gender" id="mal" type="radio" value="M" checked="checked"> 
Male
         <input name="gender" id="fem" type="radio" value="F"  />
         Female <span id="err_gender"></span><br /><br />
         <label>&nbsp;&nbsp;Contact_No</label>   
  <input type="text" name="contact_No" id="contact_No" /><span id="err_contact_No"></span><br />
  <br />
         <label>&nbsp;&nbsp;Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>   
  <input type="text" name="Address" id="Address" /><span id="err_address"></span><br />
  <br />
         <label>&nbsp;&nbsp;State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
<?php 
	$res=mysql_query("SELECT distinct(State) FROM distt");
	if(mysql_affected_rows())
	{
		echo '<select id="state" name="state">';
		echo '<option value="NS">Select State</option>';
		while($row=mysql_fetch_row($res))
		{
			echo '<option value="'.$row[0].'">'.$row[0].'</option>';
		}
		echo '</select>';
	}
	else
	{
		echo 'No State Found';
	}
?>
  <span id="err_state"></span><br /><br />
         <label>&nbsp;&nbsp;Distt</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
  <span id="spn_distt">Select State</span><input type="hidden" id="distt_hidden" />
  <span id="err_distt"></span><br /><br />
         <label>&nbsp;&nbsp;Date of Birth</label>   
  <input type="text" name="dateofbirth" id="dateofbirth" />
  <span id="err_tdateofbirth"></span><br /><br />
         <label>&nbsp;&nbsp;Anniversary&nbsp;&nbsp;</label>   
  <input type="text" name="anniversary" id="anniversary" />
  <span id="err_tanniversary"></span><br />
</span><br />
<input name="submit" type="submit" id="submit" value="submit"  />

<?php include("footer.inc") ?>

</body></html>
