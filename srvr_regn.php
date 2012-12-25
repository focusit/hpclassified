<?php include "hpclass_dbms.php" ?>
<?php 

if(isset($_GET['flag']) and $_GET['flag']=='distt')
{
 	$que="SELECT * FROM distt where State like '".$_POST['_state']."'";
    //echo $que;
	$res=mysql_query($que);
	if(mysql_affected_rows())
	{
		echo '<select id="distt" name="distt" onChange="distt_()">';
		echo '<option value="NS">Select Distt</option>';
		while($row=mysql_fetch_row($res))
		{
			echo '<option value="'.$row[2].'">'.$row[2].'</option>';
		}
		echo '</select>';
	}
	else
	{
		echo 'No Distt Found';
	}
}
else if(isset($_GET['flag']) and $_GET['flag']=='user_regn')
{
	$que="insert into user_profile(Name, Gender, Contact_No, Address, State, Distt, Email_id, Password , DateOfBirth, Anniversary) values('".$_POST['_tname']."' , '".$_POST['_gender']."', '".$_POST['_contact_No']."', '".$_POST['_Address']."', '".$_POST['_state']."', '".$_POST['_distt']."', '".$_POST['_email_id']."', '".$_POST['_tpassword']."', '".$_POST['_dateofbirth']."', '".$_POST['_anniversary']."')";

	mysql_query($que) ;
	if(mysql_error())
			print mysql_error();
		else
			print "The record inserted Successfully !";		
		
}
?>