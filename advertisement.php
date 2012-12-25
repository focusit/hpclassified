<?php include "select.php" ?>
<html>
<head>
<title>Advertisement</title>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery/lib/js/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
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
	 $(document).ready(function(){
	$("input#submit").click(function(){
	type=$("input#type").val();
  source_url=$("input#source_url").val();
  target_url=$("input#target_url").val();
publication_date=$("input#publication_date").val();
expiry_date=$("input#expiry_date").val();
impression=$("input#impression").val();

	noerr=true;
	if(type.length<1){
		noerr=false;
   		$("span#err_type").html("Type field can not be empty !");
	}
	
	else if(source_url.length<1){
		noerr=false;
   		$("span#err_source_url").html("Source Url field can not be empty !");
	}
    else if(target_url.length<1){
		noerr=false;
   		$("span#err_target_url").html("Target_Url field can not be empty !");
	}
	else if(publication_date.length<1){
		noerr=false;
   		$("span#err_publication_date").html("Publication Date  field can not be empty !");
	}
	else if(expiry_date.length<1){
		noerr=false;
   		$("span#err_expiry_date").html("Expiry Date field can not be empty !");
	}
	else if(impression.length<1){
		noerr=false;
   		$("span#err_impression").html("Impression field can not be empty !");
	}
	else
		noerr=true;
	if (noerr==false){
		return false;
	}
	else
	{
	 	$.post("advertise.php?flag=adv",{_type:type , _source_url:source_url, _target_url:target_url, _publication_date:publication_date, _expiry_date:expiry_date, _impression:impression},function(result){
      	$("div#output").html(result);
	});
	}
	}); 
  });
	 </script> 

</head>

<body>
<?php include("header.php");?>
<div id="output">Enter Form Correctly</div>
<label>Type</label>   <input type="text" name="type" id="type" /><span id="err_type"></span><br />
<label>Source Url</label>   <input type="text" name="source_url" id="source_url" /><span id="err_source_url"></span><br />
<label>Target Url </label><input type="text" name="target_url" id="target_url" /><span id="err_target_url"></span><br />
<label>Publication Date </label> <input type="text" name="publication_date" id="publication_date" /><span id="err_publication_date"></span><br />
<label>Expiry Date </label> <input type="text" name="expiry_date" id="expiry_date" /><span id="err_expiry_date"></span><br />
<label>Impressions </label> <input type="text" name="impression" id="impression" /><span id="err_impression"></span><br />
<input name="submit" type="submit" id="submit" value="submit"  />

<?php include("footer.inc") ?>
