<?php include "select.php" ?>
<?php
@session_start();
$distt=$_POST['dist'];

$eid=$_POST['user']; 
$pass=$_POST['pswd']; 

if($eid && $pass)
{
	$sql=("SELECT * FROM user_profile WHERE Email_id = '$eid'  AND Password = '$pass' ");

  	$result = mysql_query($sql);  
  	$num_rows = mysql_num_rows($result);
	$_rows=mysql_fetch_row($result);
	$flag=0;
  	if(!$num_rows==0)
  	{
		  $_SESSION['uid']=$_rows[0];
		
		  $_SESSION['name']=$_rows[2];
  		  
		  $flag=1;
  } 
  else 
  {  
		  $flag=0;
  }
  if($flag)
  {
  		echo '<script language="javascript"> 
    		var t=setTimeout("document.location=\'businessadd.php\'",3000);
	 		</script>';
  }
  else
  {
  		  echo '<script language="javascript">
        alert ("invalid username or password");
        document.location="list.php";
		</script>';
  }
}
else 
{  
  		echo '<script language="javascript">
        alert ("Empty username or password");
        document.location="list.php";
		</script>';
}
?>

