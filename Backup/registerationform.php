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
  
   val=document.getElementById("name").value;
  if(strlen(val) <= 0)
  {
    alert ('Enter your name');
	flag=0;
	return false;
   }
  //val=document.getElementById("email").value;
 /* if(strlen(val) <= 0 )
  {
     alert ('Enter your valid E-Mail id in this field');
	flag=0;
	return false;
   }*/
   val=document.getElementById("username").value;
  if(strlen(val) <= 0)
  {
     alert ('Enter User Name in this field');
	flag=0;
	return false;
   }
    val=document.getElementById("password1").value;
  if(strlen(val) <= 0)
  {
     alert ('Password Should be filled');
	flag=0;
	return false;
   }
   
   val=document.getElementById("password__verify").value;
   val1=document.getElementById("password1").value;
  if(strlen(val) <= 0 || val != val1)
  {
     alert ('Password not Match ');
	flag=0;
	return false;
   }
   
   val=document.getElementById("cb_nameoforganisation").value;
  if(strlen(val) <= 0)
  {
     alert ('Enter the name of organisation ');
	flag=0;
	return false;
   }
  
   val=document.getElementById("cb_mainaddress").value;
  if(strlen(val) <= 0)
  {
     alert ('Enter Address');
	flag=0;
	return false;
   }
    
   val=document.getElementById("cb_district").value;
  if(strlen(val) == 'District' )
  {
    alert ('Select District');
	flag=0;
	return false;
   }
   val=document.getElementById("cb_city").value;
  if(strlen(val) <= 0)
  {
    alert ('Enter City');
	flag=0;
	return false;
   }
   
   val=document.getElementById("cb_pincode").value;
  if(strlen(val) <= 0 || !isPosInteger(val))
  {
    alert ('Enter Your Valid Pin Code');
	flag=0;
	return false;
   }
  
   val=document.getElementById("cb_landlineno").value;
  if(strlen(val) <= 6 || strlen(val) >= 11 ||  !isPosInteger(val))
  {
    alert ('Phone Field Cannot be Empty or Less than 6 Digits or More Than 11 Digits');
	flag=0;
	return false;
   }
   val=document.getElementById("cb_contactperson1").value;
  if(strlen(val) <= 0)
  {
    alert ('Contact Person');
	flag=0;
	return false;
   }
   val=document.getElementById("cb_mobile1").value;
 if(strlen(val) <= 0 || strlen(val) >= 11 || !isPosInteger(val))
  {
    alert ('Mobile Field Cannot be Empty or Less than 10 Digits');
	flag=0;
	return false;
   }
   
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
        <td width="632" align="right" valign="top"><img src="images/about.gif" alt="about" /><img src="images/about-strip.gif" width="3" height="24" /><a href="http://hpclassified.com/contact_us.php?distt=<?php echo $_GET['distt']; ?>"><img src="images/contact.gif" width="73" height="24" alt="contact" border="0"/></a><img src="images/about-strip.gif" width="3" height="24" /><a href="http://hpclassified.com/feedback.php?distt=<?php echo $_GET['distt']; ?>"><img src="images/feedback.gif" width="73" height="24" alt="feedback" border="0" /></a></td>
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
	  <td width="33%" align="right" valign="top"><img src="images/himachal-classified-for-free-listing.png" alt="classified-for-free-listing" /></td>
        <td width="34%" height="184" align="center" valign="top"><form action="registerationform.php?regi=1" method="post" id="adminForm" name="adminForm" onSubmit="return func()" >
<table width="347" bgcolor="#2E83CB" ><tr >
<td width="137" ><span class="style1">
  <label for="name" title="Name:Please enter your real full name.">Name:</label>
</span></td>
<td width="161" ><input type="text" name="name" id="name" value=""   size="25"   title="Name: Please enter your real full name." /><span ></span></td>
</tr>
	<tr>
	<td  ><span class="style1">
	  <label for="email" title="Email:Please enter a valid e-mail address. A confirmation email will be sent to this address upon registration.">Email:</label>
	</span></td>
	<td   ><input type="text" name="email" id="email" value=""  size="25"  title="Email: Please enter a valid e-mail address. A confirmation email will be sent to this address upon registration." /><span ></span></td>
	</tr>
		<tr ><td  ><span class="style1">
		  <label for="username" title="Username:Please enter a valid username.  No spaces, at least 3 characters and contain 0-9,a-z,A-Z">Username:</label>
		</span></td>

					<td   ><input type="text" name="username" id="username" value=""   size="25"   title="Username: Please enter a valid username.  No spaces, at least 3 characters and contain 0-9,a-z,A-Z"  onblur="neel()" /><span ></span></td>
	</tr>
		<tr >
			<td  ><span class="style1">
			  <label for="password" title="Password:Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs">Password:</label>
			</span></td>
<td   ><input type="password" name="password1" id="password1" value=""   size="25" maxlength="50"  title="Password: Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs" /><span ></span></td>
</tr>
<tr >
<td  ><span class="style1">
  <label for="password__verify" title="Verify Password:Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs">Verify Password:</label>
</span></td>

					<td   ><input type="password" name="password__verify" id="password__verify" value=""  size="25" maxlength="50" title="Verify Password: Please enter a valid password.  No spaces, at least 6 characters and contain lower and upper-case letters, numbers and special signs" /><span ></span></td>
</tr>
<tr >
<td  ><span class="style1">
  <label for="cb_nameoforganisation">Name of Organisation:</label>
</span></td>
<td   ><input type="text" name="cb_nameoforganisation" id="cb_nameoforganisation" value=""   size="25" /><span ></span></td>
</tr>
<tr >
<td  ><span class="style1">
  <label for="cb_mainaddress">Main Address:</label>
</span></td>
<td  ><textarea name="cb_mainaddress" id="cb_mainaddress"   ></textarea><span  ></span></td>
</tr><tr >
<td  ><span class="style1">
  <label for="cb_district">District:</label>
</span></td>
<td id="cbfv_89"> <div id="distDiv1"><select name="cb_district" id="cb_district">
                   <option value="District">District</option><option value="Bilaspur">Bilaspur</option><option value="Chamba">Chamba</option><option value="Hamirpur">Hamirpur</option><option value="Kangra">Kangra</option><option value="Kinnaur">Kinnaur</option><option value="Kulu">Kulu</option><option value="Lahaul and Spiti">Lahaul and Spiti</option><option value="Mandi">Mandi</option><option value="Shimla">Shimla</option><option value="Sirmaur">Sirmaur</option><option value="Solan" selected="selected">Solan</option><option value="Una">Una</option>
                    </select><span  ></span></div></td>
</tr>
<td  ><span class="style1">
  <label for="cb_city">City:</label>
</span></td>

<td   ><input type="text" name="cb_city" id="cb_city" value=""   size="25" /><span  ></span></td>
</tr>

<tr >
<td  ><span class="style1">
  <label for="cb_pincode">Pin Code:</label>
</span></td>
<td   ><input type="text" name="cb_pincode" id="cb_pincode" value=""   size="25" /><span  ></span></td>
</tr>

<tr >
<td  ><span class="style1">
  <label for="cb_landlineno">Land Line No.:</label>
</span></td>
<td   ><input type="text" name="cb_landlineno" id="cb_landlineno" value=""  size="25"   /><span  ></span></td>
</tr>
<tr  >
<td  ><span class="style1">
  <label for="cb_contactperson1">Contact Person :</label>
</span></td>
<td   ><input type="text" name="cb_contactperson1" id="cb_contactperson1" value=""   size="25"   /><span  ></span></td>
</tr>
<tr   >
<td  ><span class="style1">
  <label for="cb_mobile1">Mobile:</label>
</span></td>
<td    ><input type="text" name="cb_mobile1" id="cb_mobile1" value=""  size="25"   /><span  ></span></td>
</tr>
<tr   >
<td  ><span class="style1">
  <label for="cb_dateofbirth">Date of Birth:</label>
</span></td>
<td><select name="day" id="days">
            <?php 
			for($i=1;$i<=31;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
		    ?></select>
            <select name="month" id="months">
             <?php 
			for($i=1;$i<=12;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
	    	?></select>
             <select name="year" id="years">
             <?php 
			for($i=1950;$i<=2010;$i++)
			{
				echo "<option value=".$i.">".$i."</option>";
			}
		    ?></select><span  ></span></td>
</tr>    
<tr>
  <td colspan="2" align="right"><input name="submit" type="submit" value="Register"></td>
  </tr>
</table>
</form></td>
		<td width="33%" align="left" valign="top"><img src="images/your-ads-here.png" alt="your-ads-here" /></td>
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
if($_GET['regi']==1)	{
	
					

			

                   include('hp-dbms.inc.php');

			if(strlen($_POST['name'])>0) {

			$name=$_POST['name'];

            $email=$_POST['email'];

			$username=$_POST['username'];

			$password=$_POST['password1'];

            $organisation=$_POST['cb_nameoforganisation'];

			$address=$_POST['cb_mainaddress'];

			$city=$_POST['cb_city'];

            $district=$_POST['cb_district'];

			$pincode=$_POST['cb_pincode'];

			$landlineno=$_POST['cb_landlineno'];

			$person1=$_POST['cb_contactperson1'];

			$mobile1=$_POST['cb_mobile1'];
			$dateofbirth=$_POST['day'];
			$monthofbirth=$_POST['month'];
			$yearofbirth=$_POST['year'];
			
			
			$sql1="select * from tblregistration where username='".$username."'";	
			$res1=@mysql_query($sql1);
				if(mysql_affected_rows() > 0)
					{
						echo '<script language="javascript">';
						echo 'alert("User name already in use !")';
						echo '</script>';
					}
				else 
					{
				

           $sql = "Insert into tblregistration (name,email,username,password,Organisation,Address,District,City,Pin_Code,Land_Line_No,Mobile,Contact_Person,Date_of_Birth) 
values('$name','$email','$username','$password','$organisation','$address','$district','$city','$pincode','$landlineno','$mobile1','$person1','".$dateofbirth."/".$monthofbirth."/".$yearofbirth."')";

            $result = @mysql_query($sql);

			if(mysql_affected_rows() > 0)

                            {

                               echo '<script language="javascript">';
								echo 'alert("Register Successfully !")';
								echo '</script>';
                            }

					else {

						echo '<script language="javascript">';
						echo 'alert("Registeration Cancel !")';
						echo '</script>';
						}
				
				}
        }
      
       
}


 
	
?>