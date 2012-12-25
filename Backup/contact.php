<script language="javascript">
function strlen(inputStr)
{
	for(i=0;i<inputStr.length; i++);
		return i;
}
function isPosInteger(inputVal)
{
	inputStr = inputVal.toString()
	for (var i = 0; i < inputStr.length; i++)
	{
	    var oneChar = inputStr.charAt(i)
	    if (oneChar < "0" || oneChar > "9")
		{
			return false
	    }
	 }
	return true
}
 function func()
 {
  flag=1;
  
   val=document.getElementById("txname").value;
  if(strlen(val) <= 0)
  {
    alert('Name,Company Name,Firm Name Should be Filled');
	flag=0;
	return false;
   }
  val=document.getElementById("txofficeaddress").value;
  if(strlen(val) <= 20 )
  {
    alert('Office Address Should be Filled ! Atleast 20 Digits');
	flag=0;
	return false;
   }
   /*val=document.getElementById("txaddress").value;
  if(strlen(val) <= 20 )
  {
    alert('Address Should be Filled! Atleast 20 Digits');
	flag=0;
	return false;
   }*/
   val=document.getElementById("txcontactperson").value;
  if(strlen(val) <= 0 )
  {
    alert('Contact Person Should be Filled');
	flag=0;
	return false;
   }
  
   
   val=document.getElementById("txnumber").value;
  if(strlen(val) <= 6 )
  {
    alert("Contact Person's Phone Number Should be Filled");
	flag=0;
	return false;
   }
  
  /* val=document.getElementById("txemail").value;
  if(strlen(val) <= 0)
  {
   alert('E-Mail Id Should be Filled');
	flag=0;
	return false;
   }*/
    
  
}
</script>

<?php
	 include 'hp-dbms.inc.php';
	 @session_start();
	 $distt=$_GET['distt'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Himachal Classified</title>
<style type="text/css">
.himachal {
	text-align: justify;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
}
body {
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
	background-color: #FFF;
	background-repeat: repeat-y;
}
.text {
	color: #FFF;
}
.post {
	font-size: 10px;
}
a:link {
	color: #03F;
	text-decoration: none;
}
a:visited {
	color: #03F;
	text-decoration: none;
}
a:hover {
	color: #D6D6D6;
	text-decoration: underline;
}
.style2 {text-align: justify; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style1 {color: #FFFFFF}
a:active {
	text-decoration: none;
}

#Layer2 {
	position:absolute;
	width:411px;
	height:183px;
	z-index:2;
	left: 353px;
	top: 197px;
	background-color: #FFFFFF;
	visibility: inherit;
}
</style>
<script language="javascript">
function showLayer()
{
	<?php
		if(isset($_SESSION['gemail']))
		{			
			echo 'document.getElementById("Layer2").style.display="none";';
			echo 'document.getElementById("innertbl").style.display="";';
		}
		else
		{
			echo 'document.getElementById("Layer2").style.display="";';
			echo 'document.getElementById("innertbl").style.display="none";';
			
		}
	?>			
}
function closLayer()
{
		document.getElementById("Layer2").style.display="none";
		document.getElementById("innertbl").style.display="";
}
</script>
</head>

<body onLoad="showLayer();">
<div id="maindiv">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="himachal">
  <tr>
    <td colspan="4" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="341" rowspan="3" align="left" valign="top"><a href="http://hpclassified.com/distt-index.php?distt=<?php echo $distt; ?>"><img src="images/logo-down.gif" alt="logo himachal pradesh" width="254" height="58" border="0" /></a></td>
        <td width="268" align="left" valign="top"><table width="95%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="39%" align="left" valign="top"><img src="images/loginwithfacebook_icon.gif" width="150" height="16" alt="facebook" /></td>
              <td width="5%" align="left" valign="top"><img src="images/tp_facebook_icon.gif" width="16" height="16" alt="facebook icon" /></td>
              <td width="56%" align="left" valign="top">&nbsp;<img src="images/tp_twitter_icon.gif" width="16" height="16" alt="twitter icon" /></td>
            </tr>
        </table></td>
        <td width="632" align="right" valign="top"><img src="images/about.gif" alt="about" /><img src="images/about-strip.gif" width="3" height="24" /><a href="http://hpclassified.com/contact_us.php?distt=<?php echo $_GET['distt']; ?>"><img src="images/contact.gif" width="73" height="24" alt="contact" border="0" /></a><img src="images/about-strip.gif" width="3" height="24" /><a href="http://hpclassified.com/feedback.php?distt=<?php echo $_GET['distt']; ?>"><img src="images/feedback.gif" width="73" height="24" alt="feedback" border="0" /></a></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="73%" height="38" align="left" valign="middle" background="images/HPC-_sinein.gif"><form id="form1" name="form1" method="post" action="">
                  <label for="user name" class="text">User Name</label>
                  <input type="text" name="user name" id="user name" />
                  <label for="password" class="text">Password</label>
                  <input type="text" name="password" id="password" />
                  <input type="submit" name="go" id="go" value="Go" />
                  <span class="text">Login or <a href="http://hpclassified.com/registerationform.php?distt=<?php echo $_GET['distt']; ?>">Register</a></span><br />
              </form></td>
              <td width="27%" height="38" align="right" valign="middle" background="images/HPC-_sinein.gif"><form id="form2" name="form2" method="post" action="">
                  <label for="select your city"><span class="text">Select Your City</span></label>
                  <select name="select your city" id="select your city">
                    <option value="Bilaspur">Bilaspur</option><option value="Chamba">Chamba</option><option value="Hamirpur">Hamirpur</option><option value="Kangra">Kangra</option><option value="Kinnaur">Kinnaur</option><option value="Kulu">Kulu</option><option value="Lahaul and Spiti">Lahaul and Spiti</option><option value="Mandi">Mandi</option><option value="Shimla">Shimla</option><option value="Sirmaur">Sirmaur</option><option selected="selected" value="Solan">Solan</option><option value="Una">Una</option>
                  </select>
                  <br />
              </form></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" align="left" valign="middle" class="style2"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td width="8%" align="center"><strong>Keyword</strong></td>
            <td width="23%" align="left"><span class="style1"><strong>
              <input name="keyword" type="text" id="keyword" size="32" />
            </strong></span></td>
            <td width="14%" align="center"><strong>Area / Loc</strong><strong>ality</strong></td>
            <td width="18%" align="left"><span class="style1"><strong>
              <input type="text" name="locality" id="locality" />
            </strong></span></td>
            <td width="9%" align="center"><strong>Category</strong></td>
            <td width="18%" align="left"><input type="text" name="category" id="category" /></td>
            <td width="10%" align="left"><input type="submit" name="search" id="search" value="Search" /></td>
          </tr>

        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4" align="left" valign="bottom"><table width="100%" height="187" border="0" cellpadding="3" cellspacing="3">
      <tr>
	  <td width="33%" align="right"><img src="images/himachal-classified-for-free-listing.png" alt="classified-for-free-listing" /></td>
        <td width="34%" height="184" align="center" valign="top"><form id="form3" name="form3" method="post" action="contact.php?con=1&distt=<?php echo $_GET['distt']; ?>" onSubmit="return func()" ><table width="95%" bgcolor="#2E83CC">
          <tr>
            <td width="107"><select name="txstatus" id="txstatus">
                <option value="M/S">M/S</option>
                <option value="Firm">Firm</option>
                <option value="Company">Company</option>
            </select></td>
            <td width="254"><input type="text" name="txname" id="txname" size="30" /></td>
          </tr>
		   <tr>
            <td><span class="style1">Category</span></td>
            <td><select name="txcategory" id="txcategory" >
			<option value="advertising agencies">Advertising Agencies </option>
			<option value="advocates">Advocates</option>
			<option value="apartments">Apartments</option>
			<option value="automobiles">Automobiles</option>
			<option value="automobile dealers">Automobile Dealers </option>
			<option value="automobile service centers">Automobile Service Centers </option>
			<option value="colleges/universities">Colleges/Universities</option>
			<option value="bakers-biscuit store">Bakers Biscuit store </option>
			<option value="book depots">Book Depot</option>
			<option value="building materials">Building Materials</option>
			<option value="catering services">Catering Services</option>
			<option value="clinics">Clinics</option>
			<option value="colleges & around">Colleges & Around </option>
			<option value="communications">Communications</option>
			<option value="computer service and accessories-cyber cafe">Computer Service,Accessories And Cyber Cafe</option>
			<option value="confectioners">Confectioners</option>
			<option value="couriers">Couriers</option>
			<option value="departmental stores">Departmental Stores</option>
			<option value="earthmoving machineries">Earthmoving Machineries</option>
			<option value="electrical contractors">electrical contractors</option>
			<option value="flower decorations">Flower Decorations</option>
			<option value="footwears">Footwears</option>
			<option value="furniture houses">Furniture Houses</option>
			<option value="gas agencies">Gas Agencies</option>
			<option value="general stores">General Stores</option>
			<option value="gift shops">Gift Shops</option>
			<option value="glass houses">Glass Houses</option>
			<option value="hair saloons and beauty parlours">Hair Saloons And Beauty Parlours</option>
			<option value="hardware stores">Hardware Stores</option>
			<option value="hospital-clinics">Hospital Clinics</option>
			<option value="hotels">Hotels</option>
			<option value="insurances">Insurances</option>
			<option value="jewellers">Jewellers</option>
			<option value="job placements">Job Placements</option>
			<option value="karyana stores ">Karyana Stores</option>
			<option value="language classes">Language Classes</option>
			<option value="medicos">Medicos</option>
			<option value="mobile repair and spares">Mobile Repair and Spares</option>
			<option value="newspaper offices and agencies">Newspaper Offices and Agencies</option>
			<option value="nursing homes">Nursing Homes</option>
			<option value="opticians">Opticians</option>
			<option value="property and real estate agents">Property and Real Estate Agents</option>
			<option value="public schools">Public Schools</option>
			<option value="readymade garments">Readymade Garments</option>
			<option value="sweet shop">Sweet Shop</option>
			<option value="trading companies" selected="selected">Trading Companies</option>
			<option value="vastu/feng shui">Vastu/Feng Shui</option>
			<option value="web designing">Web Designing</option>
			<option value="yoga/meditation">Yoga/Meditation</option>
			</select></td>
          </tr>
          <tr>
            <td><span class="style1">Address (Office)</span></td>
            <td><textarea name="txofficeaddress" id="txofficeaddress" rows="2" cols="27"></textarea></td>
          </tr>
          <!--<tr>
            <td><span class="style8">Address</span></td>
            <td><textarea name="txaddress" id="txaddress" rows="2" cols="27"></textarea></td>
          </tr>-->
          <tr>
            <td><span class="style1">Contact Person</span></td>
            <td><input type="text" name="txcontactperson" id="txcontactperson" size="30" /></td>
          </tr>
          <tr>
            <td><span class="style1">Number</span></td>
            <td><input type="text" name="txnumber" id="txnumber" size="30" /></td>
          </tr>
          <tr>
            <td><span class="style1">E-Mail</span></td>
            <td><input type="text" name="txemail" id="txemail" size="30" /></td>
          </tr>
          <tr>
            <td colspan="2" align="right"><input type="submit" name="submit" value="Submit" /></td>
          </tr>
        </table>
        </form></td>
		<td width="33%" align="left"><img src="images/your-ads-here.png" alt="your-ads-here" /></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td width="569" align="left" valign="top" bgcolor="#FFFFFF"><a href="#" target="_parent">Privacy Policy</a> | <a href="#" target="_parent">Terms &amp; Conditions</a> | <a href="#" target="_parent">How to Partner with HPC</a> | <a href="#" target="_parent">Disclaime</a>r | <a href="#" target="_parent">Sitemap </a><br />
All right reserved @ <a href="http://www.focus-itech.com">www.focus-itech.com</a>
</td>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
    <td width="155" align="right" valign="top"><a href="index.html"><img src="images/logo-down.gif" alt="logo himachal pradesh" width="254" height="58" border="0" /></a></td>
  </tr>
  
</table>
</div>

</body>
</html>
<?php
if($_GET['con']==1)	{


		$status=$_POST['txstatus'];
		$name=$_POST['txname'];
		$office=$_POST['txofficeaddress'];
		$cat=$_POST['txcategory'];
		//$address=$_POST['txaddress'];
		$person=$_POST['txcontactperson'];
		$no=$_POST['txnumber'];
		$email=$_POST['txemail'];
		$email1='himachalclassified@gmail.com';
		$table= $_GET['distt'].' '. $_POST['txcategory'].'';
		
		//echo 'Table Name('.$table.')';
		
			$to1 = $email;
						
			
			$to = "himachalclassified@gmail.com";
			$subject = "Ad for free listing";
			$message = '<table border="1" bgcolor="#2E83CC" width="100%"><tr><td><font color="#FFFFFF">'.$status.'</font></td><td><font color="#FFFFFF">'.$name.'</font></td></tr>
								<tr><td><font color="#FFFFFF">Address (Office)</font></td><td><font color="#FFFFFF">'.$office.'</font></td></tr>
								<tr><td><font color="#FFFFFF">Category</font></td><td><font color="#FFFFFF">'.$cat.'</font></td></tr>
								<tr><td><font color="#FFFFFF">Contact Person</font></td><td><font color="#FFFFFF">'.$person.'</font></td></tr>
								<tr><td><font color="#FFFFFF">Number</font></td><td><font color="#FFFFFF">'.$no.'</font></td></tr>
								<tr><td><font color="#FFFFFF">E-Mail</font></td><td><font color="#FFFFFF">'.$email.'</font></td></tr>
								
						</table>'; 
			$message1 = '<p>Himachal Classified is about free classifieds for Himachal Pradesh. You can buy, sell, find anything faster and easier anywhere in himachal - Real Estate, Automobiles & Vehicles, Jobs, Matrimonial, Services, Travels, Computers, Mobiles, Electronics, Furnitures & many more..</p>'; 
			
			//echo $message;

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers	
		$headers .= 'From: '.$email. "\r\n";
		//$headers .= 'Cc: '.$email."\r\n";
		
		
		$headers1 = "MIME-Version: 1.0" . "\r\n";
		$headers1 .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

		// More headers	
		$headers1 .= 'From: '.$email1. "\r\n";
		

		mail($to,$subject,$message,$headers);
		
		mail($to1,$subject,$message1,$headers1);
		
		
	
			
				$query="SELECT * FROM `tblscrap` WHERE `B` LIKE '".$table."%' order by 'A' asc";
				$result=mysql_query($query) or die("Error in query");
					
				if(mysql_affected_rows()>0)
					{
						//echo 'Table exist';
						
					}
				else
					{
					
					
						
						
						
						$sq1= "CREATE TABLE `hpclass_dbms`.`".$table."` (
						`A` INT NOT NULL AUTO_INCREMENT ,
						`B` VARCHAR( 80 ) NOT NULL ,
						`C` VARCHAR( 22 ) NOT NULL ,
						PRIMARY KEY ( `A` )
						)ENGINE = MYISAM ;";
						$res1=mysql_query($sq1) or die("unable to create table named (".$table.") Error in query !");
						//echo 'Table has been created';
						$qu2="insert into `tblscrap` (B) values( '".$table."')";
						$res2=mysql_query($qu2) or die("Error in query 2");
					}
	
				
				
						$qu3="insert into `".$table."` (B,C) values( '".$office."','".$no."')";
						$res3=mysql_query($qu3) or die("Error in query 3");
						echo '<script language="javascript">
						alert("Message has been sent to administer");
						</script>';
	
	}	
		
?>


