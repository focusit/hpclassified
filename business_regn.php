<?php
	@session_start();
	include "hpclass_dbms.php"
?>
<?php


if(isset($_GET['flag']) and $_GET['flag']=='category')
{
 	$que="SELECT * FROM Category where Category like '".$_POST['_category']."'";
    //echo $que;
	$res=mysql_query($que);
	if(mysql_affected_rows())
	{
		echo '<select id="category" name="category" onClick="category_()">';
		echo '<option value="NS">Select category</option>';
		while($row=mysql_fetch_row($res))
		{
			echo '<option value="'.$row[2].'">'.$row[2].'</option>';
		}
		echo '</select>';
	}
	}

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
			echo '<option value="'.$row[6].'">'.$row[6].'</option>';
		}
		echo '</select>';
	}
	else
	{
		echo 'No Distt Found';
	}
}



else if(isset($_GET['flag']) and $_GET['flag']=='businessadd')
{

	$que= "insert into business_detail(Owner, Title, Category, Email_id, Contact_No, Address, State, Distt, Map, Description) values(1,'".$_POST['_title']."' , '".$_POST['_category']."', '".$_POST['_email_id']."', '".$_POST['_contact_No']."', '".$_POST['_Address']."','".$_POST['_state']."', '".$_POST['_distt']."', '".$_POST['_map_URL']."', '".$_POST['_tdescription']."')";// $_SESSION['uid']
	echo $que;
	mysql_query($que) ;
	if(mysql_error())
			print mysql_error();
		else
			print "<h3 style='color:blue'>The record inserted Successfully !</h3>";		
	
}
?>