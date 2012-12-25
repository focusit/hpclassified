<?php include("header.php");?>
<?php @session_start(); echo $_SESSION['name']; ?>
<title>Business Registration</title>
<style>
label{
width:200px;
display:block;
float:left;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery/lib/js/jquery/jquery-1.7.1.min.js"></script>
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
	title=$("input#title").val();
	category="";
	for(i=document.getElementById('add_category').options.length-1;i>=1;i--){	
		category+=document.getElementById('add_category').options[i].value+";";
  	}
	//$("input#category_hidden").val();
  	email_id=$("input#email_id").val();
  	contact_No=$("input#contact_No").val();
  	Address=$("input#Address").val();	
	state=$("select#state").val(); 
	distt=$("input#distt_hidden").val();
	map_URL=$("input#map_URL").val();	 
	tdescription=$("textarea#tdescription").val();
	noerr=true;
	if(title.length<1){
		noerr=false;
   		$("span#err_title").html("Title field can not be empty !");
	}
	else if(category=="NS"){
		noerr=false;
   		$("span#err_category").html("Category field can not be empty !");
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
	else if(tdescription.length<1){
		noerr=false;
   		$("span#err_tdescription").html("Description field can not be empty !");
	} 
	 else
		noerr=true;
	if (noerr==false){
		return false;
	}
	else
	{
	 	$.post("business_regn.php?flag=businessadd",{_title:title , _Address:Address, _email_id:email_id, _contact_No:contact_No,_state:state , _distt:distt,_category:category ,_map_URL:map_URL , _tdescription:tdescription},function(result){
      		$("div#output").html(result);
		});
	}
	}); 
});
	 </script> 
     <script type="text/javascript">
  function distt_()  {
  	document.getElementById('distt_hidden').value=document.getElementById('distt').value;
  }
   function category_()  {
  	document.getElementById('category_hidden').value=document.getElementById('category').value;
  }
  function AddItems()  {
			if(document.getElementById('category').value!="NS"){
				flag=false;
				for(i=document.getElementById('add_category').options.length-1;i>=1;i--){	
					if(document.getElementById('category').value==document.getElementById('add_category').options[i].value){
						flag=true;
						break;
					}
				}
				if(!flag){
					var opt=document.createElement("option");
	            	document.getElementById("add_category").options.add(opt);
					opt.text=document.getElementById("category").value;
					opt.value=document.getElementById("category").value;
				}
			}
	}

function removeItem(){
	var i;
	selectbox=document.getElementById('add_category');
	for(i=selectbox.options.length-1;i>=1;i--){
		if(selectbox.options[i].selected)
		selectbox.remove(i);
	}
}
</script>





<div id="output">Enter Form Correctly</div>
<label>Title</label>   <input type="text" name="title" id="title" /><span id="err_title"></span><br />
<label>Address</label>   
  <input type="text" name="Address" id="Address" /><span id="err_address"></span><br />
<label>E-mail ID</label>   <input type="text" name="email_id" id="email_id" /><span id="err_email_id"></span><br />
<label>Contact_No</label>   <input type="text" name="contact_No" id="contact_No" /><span id="err_contact_No"></span><br />
 <label>State</label>
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
<label>&nbsp;&nbsp;Distt</label>
  <span id="spn_distt">Select State</span><input type="hidden" id="distt_hidden" />
  <span id="err_distt"></span><br /><br />
<label>Category <br />(Double click the catetory you want to add)</label>

 <?php 
	$res=mysql_query("SELECT Category_name FROM category");
	if(mysql_affected_rows())
	{
		echo '<select id="category" name="category" multiple="true" size=6 title="double click the desired catetory" onDblClick="AddItems()">';
		echo '<option value="NS">Select Category</option>';
		while($row=mysql_fetch_row($res))
		{
			echo '<option value="'.$row[0].'">'.$row[0].'</option>';
		}
		echo '</select>';
	}
	
?> <input type="hidden" id="category_hidden" /><span id="err_category"></span>
<select id="add_category" multiple="true" size=6   onDblClick="removeItem()" style="width:200px; ">
<option value="NS">Selected Categories</option>
</select><br />
<label>Map URL</label>
<input type="text" name="map_URL" id="map_URL" /><span id="err_map_URL"></span><br />
<label>Description </label>
<textarea rows="5" cols="100" id="tdescription" name="tdescription"> </textarea><span id="err_tdescription"></span>
<br />
<input name="submit" type="submit" id="submit" value="submit"  />

<?php include("footer.inc") ?>


