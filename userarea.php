
<?php include("header.php"); ?>
	<table width="100%" height="187" border="0" cellpadding="0" cellspacing="0">
      <tr>
	  <td width="25%" align="right" valign="top">
	  <img src="images/himachal-classified-for-free-listing.png" alt="classified-for-free-listing" /></td>
        <td width="50%" height="184" valign="top">
<?php
@session_start();
include("select.php");
$us=$_SESSION['un'];
$pass=$_SESSION['pass'];
if(!isset($_SESSION['un']))
{
header("location:login.php");
}
$pid=""; 
$query1=mysql_query("SELECT Profile_id FROM user_profile WHERE Email_id='$us' && password='$pass' ");
$row1=mysql_fetch_array($query1);
$pid=$row1[0];
$query2=mysql_query("SELECT * FROM user_profile WHERE Profile_id='$pid' ");
$name="";
$contact="";
$add="";
$dist="";
$email="";
while($row2=mysql_fetch_array($query2))
  {
   $name=$row2["Name"];
   $contact=$row2["Contact_No."];
   $add=$row2["Address"];
   $dist=$row2["Distt."];
   $email=$row2["Email_id"];
  }
 $query3=mysql_query("SELECT * FROM business_detail WHERE Profile_id='$pid'");
$bemail="";
$bcont="";
$badd="";
$bdist="";
while($row3=mysql_fetch_array($query3))
{
$bemail=$row3["Email_id"];
$bcont=$row3["Contact_No."];
$badd=$row3["Address"];
$bdist=$row3["Distt."];
} 
$query4=mysql_query("SELECT * FROM business_profile WHERE Profile_id='$pid'");
$ct="";
$prdes="";
while($row4=mysql_fetch_array($query4))
{
$ct=$row4["Category"];
$prdes=$row4["Profile_description"];
}
$query5=mysql_query("SELECT * FROM product_detail WHERE Profile_id='$pid'");
$pnm="";
$pdes="";
$img="";
$video="";
while($row5=mysql_fetch_array($query5))
{
$pnm=$row5["Product_name"];
$pdes=$row5["Product_description"];
$img=$row5["Product_image"];
$video=$row5["Product_video"];
}
?>
 <table width="50%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#e8eefa">
<tr><td colspan="2">
    <fieldset><legend align="center"><b>User Profile</b></legend>
    <table align="center" width="600px" border="0" cellspacing="0" cellpadding="0" style="padding:2px">
<tr>
    <td width="200px"><label>Name</label></td>
    <td width="400px"><?php echo $name;?></td>
</tr>
<tr>
    <td><label>Contact No.</label></td>
    <td><?php echo $contact;?></td>
</tr>
<tr>
    <td><label>Address</label></td>
    <td><?php echo $add;?></td>
</tr>
<tr>
    <td ><label>District.</label></td>
    <td ><?php echo $dist;?></td>
</tr>
<tr>
    <td ><label>E Mail ID</label></td>
    <td ><?php echo $email;?></td>
</tr>
<tr>
    <td ><label>Password</label></td>
    <td ><?php echo $pass;?></td>
</tr>
<tr><td colspan="2" align="right"><input type="button" name="button1" value="Edit"  
onclick="document.location='viewprofile.php?distt=<?php echo $distt;?>'"/></td></tr>
</table></fieldset></td></tr>


<tr><td colspan="2">
    <fieldset><legend align="center"><b>Business Details</b></legend>
    <table align="center" width="600px" border="0" cellspacing="0" cellpadding="0" style="padding:2px" >
<tr>
    <td width="200px" ><label>E Mail ID</label></td>
    <td width="400px" ><?php echo $bemail;?></td>
</tr>
<tr>
    <td><label>Contact No.</label></td>
    <td><?php echo $bcont;?></td>
</tr>
<tr>
    <td><label>Address</label></td>
    <td><?php echo $badd;?></td>
</tr>
<tr>
    <td><label>Distt.</label></td>
    <td><?php echo $bdist;?></td>
</tr>
<tr><td colspan="2" align="right"><input type="button" name="button2" value="Edit"  
onclick="document.location='viewbdetail.php?distt=<?php echo $distt;?>'"/></td></tr>
</table></fieldset></td></tr> 


<tr><td colspan="2">
    <fieldset><legend align="center"><b>Business Profile</b></legend>
    <table align="center" width="600px" border="0" cellspacing="0" cellpadding="0" style="padding:2px">
<tr>
    <td width="200px" ><label>Category</label></td>
    <td width="400px"><?php echo $ct;?></td>
</tr>
<tr>
    <td><label>Profile Description</label></td>
    <td><?php echo $prdes;?></td>
</tr>
<tr><td colspan="2" align="right"><input type="button" name="button3" value="Edit"  
onclick="document.location='viewbprofile.php?distt=<?php echo $distt;?>'"/></td></tr>
</table></fieldset></td></tr>


<tr><td colspan="2">
    <fieldset><legend align="center"><b>Product/Service Details</b></legend>
    <table align="center" width="600px" border="0" cellspacing="0" cellpadding="0" style="padding:2px">
<tr>
    <td width="200px"><label>Product Name</label></td>
    <td width="400px"><?php echo $pnm;?></td>
</tr>
<tr>
    <td><label>Product Description</label></td>
    <td><?php echo $pdes;?></td>
</tr>
<tr>
    <td>Image</td>
    <td><?php echo $img;?></span>
	</td>
</tr>
<tr>
    <td>Video</td>
    <td><?php echo $video;?></td>
</tr>
<tr><td colspan="2" align="right"><input type="button" name="button4" value="Edit" 
onclick="document.location='viewpdetail.php?distt=<?php echo $distt;?>'"/></td></tr>
</table></fieldset></td></tr>
<tr><td colspan="2" align="center"><a href="list.php?distt=<?php echo $distt?>" style="text-decoration:none;color:black"> Click to Continue</a></td></tr>
</table>
		</td>
		<td width="25%" align="left" valign="top"><img src="images/your-ads-here.png" alt="your-ads-here" /></td>
        </tr>
    </table>
<?php include("footer.inc"); ?>

