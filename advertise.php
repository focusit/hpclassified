<?php include "hpclass_dbms.php" ?>
<?php

 if(isset($_GET['flag']) and $_GET['flag']=='adv')
{

	$que= "insert into advertisements(Type, Source_URL, Target_URL, PublicationDate, ExpiryDate, Impressions) values('".$_POST['_type']."' , '".$_POST['_source_url']."', '".$_POST['_target_url']."', '".$_POST['_publication_date']."', '".$_POST['_expiry_date']."', '".$_POST['_impression']."')";
	mysql_query($que) ;
	if(mysql_error())
			print mysql_error();
		else
			print "The record inserted Successfully !";		
	
}
?>