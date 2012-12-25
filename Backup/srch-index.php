<?php
	 include 'hp-dbms.inc.php';
	 @session_start();
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
.style3 {
	color: #FF0000;
	font-weight: bold;
	font-size: 16px;
}
.style4 {
	font-size: 14px;
	font-weight: bold;
	color: #2E83CC;
}
.style5 {
	color: #FF0000;
	font-weight: bold;
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

<body onload="showLayer();">
<div id="maindiv">
<table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="himachal">
  <tr>
    <td colspan="4" align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="341" rowspan="3" align="left" valign="top"><a href="distt-index.php?distt=<?php echo $_GET['distt']; ?>"><img src="images/himachal-classified-<?php echo $_GET['distt']; ?>.gif" alt="himachal classified" border="0" /></a></td>
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
                  <span class="text">Login or <a href="http://hpclassified.com/contact.php?distt=<?php echo $_GET['distt']; ?>">Register</a></span><br />
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
    <td colspan="4" align="left" valign="bottom"><table width="100%" border="0" cellspacing="3" cellpadding="3">
      <tr>
        <td align="left" valign="top"><div id="innertbl">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="middle" bgcolor="#808080"><div align="center"><font size="4" color="#FFFFFF" face="book antiqua">Availabale Categories </font></div></td>
              <td align="left" valign="top" bgcolor="#808080"><div align="center"><font size="4" color="#FFFFFF" face="book antiqua">Availabale Searches for '<?php echo $_GET['sch']."' in ".strtoupper($_GET['distt']); ?></font></div></td>
              <td align="left" valign="top" bgcolor="#808080"><div align="center"><font size="4" color="#FFFFFF" face="book antiqua">Adevertisements</font></div></td>
            </tr>
            <tr>
              <td width="20%" align="center" valign="top">
			    <div align="center">
			      <?php
					$query="SELECT * FROM `tblscrap` WHERE `B` LIKE '".$_GET['distt']."%' order by 'A' asc";
					$result=mysql_query($query) or die("Error in query");
					
					if(mysql_affected_rows()>0)
					{
						echo '<table cellpadding="3" width="100%" cellpadding="3">';
						while($row=mysql_fetch_row($result))
						{
							$query_1="SELECT * FROM `".$row[1]."` WHERE `B` LIKE '".$_GET['sch']."%'";
							$result_1=mysql_query($query_1) or die("Error in query_1");
					
							if(mysql_affected_rows()>0)
							{
								echo '<tr><td align="right"><font face="book antiqua"><a href="#'.$row[1].'">'.strtoupper($row[1]).'</a></font></td></tr>';						}
						}
						echo '</table>';
					}
				?>
			        </div></td>
                <td width="62%" align="left" valign="top">
				  <div align="center">
				  <?php
					$flag=0;
					if($_GET['flag']=='ch'){
					$query="SELECT * FROM `tblscrap` WHERE `B` LIKE '".$_GET['distt']."%' order by 'A' asc";

					$result=mysql_query($query) or die("Error in query");
					
					if(mysql_affected_rows()>0)
					{
						echo '<table width="100%">';
						
						while($row=mysql_fetch_row($result))
						{
							echo '<tr><td align="center"><div>';
							
							$query_1="SELECT * FROM `".$row[1]."` WHERE `B` LIKE '".$_GET['sch']."%'";

							$result_1=mysql_query($query_1) or die("Error in query_1");
					
							if(mysql_affected_rows()>0)
							{
								$flag=1;
								echo '<table width="100%" cellpadding="3" border=0>';
								echo '<tr><td align="left" colspan="3"><a name="'.$row[1].'"><font size="3" face="book antiqua" color="white"><span style="background-color:gray">&nbsp;<b>'.strtoupper($row[1]).'</b>&nbsp;</span></font></a></td></tr>';
								
								while($row_1=mysql_fetch_row($result_1))
								{
									echo '<tr><td align="left"><font face="book antiqua"><b>'.strtoupper($row_1[1]).'</b></font></td><td width="25%" align="right"><b>'.$row_1[2].'</b></td><td width="15%"><a href="#">Email</a> | <a href="#">SMS</a></td></tr>';
								}
								echo '</table>';
							}							
							echo '</div></td></tr>';
						}
						echo '</table>';
					}}
					else if($_GET['flag']=='tbl')
					{
							$query_2="SELECT * FROM 'solan advertising agencies'";
							echo $query_2;
							$result_2=mysql_query($query_2) or die("Error in query_2");
					
							if(mysql_affected_rows()>0)
							{
								$flag=1;
								echo '<table width="100%" cellpadding="3" border=0>';
								echo '<tr><td align="left" colspan="3"><a name="'.$row[1].'"><font size="3" face="book antiqua" color="white"><span style="background-color:gray">&nbsp;<b>'.strtoupper($_GET['distt']." ".$_GET['sch']).'</b>&nbsp;</span></font></a></td></tr>';
								
								while($row_2=mysql_fetch_row($result_2))
								{
									echo '<tr><td align="left"><font face="book antiqua"><b>'.strtoupper($row_2[1]).'</b></font></td><td width="25%" align="right"><b>'.$row_2[2].'</b></td><td width="15%"><a href="#">Email</a> | <a href="#">SMS</a></td></tr>';
								}
								echo '</table>';					
						}
					}
					/*if(!$flag)
					{
						$fp = fopen("http://search.babylon.com/?q=".urlencode($_GET['sch'])."+in+".$_GET['distt']."&babsrc=home&s=web","r");
						if (!$fp)
						{
    							echo "$errstr ($errno)<br />\n";
							} 
							else
							{
								echo '<div align="left">';
								while (!feof($fp))
								{
									if(preg_match("/".ucfirst($_GET['sch'])."/",$finstr,$matches) and preg_match("/".ucfirst($_GET['distt'])."/",$finstr,$matches))
									echo $finstr;
								}
								echo '</div>';
							}
						}*/
				?>
				      </div></td>
                <td width="25%" align="left" valign="top"><center>
                  <table width="100%" border="0" cellspacing="0" cellpadding="3">
                    <tr>
                      <td><div align="center"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"></div></td>
                    </tr>
                    <tr>
                      <td><div align="center"></div></td>
                    </tr>
                  </table>
                </center></td>
              </tr>
            <tr>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
              <td align="left" valign="top">&nbsp;</td>
            </tr>
          </table>
        </div></td>
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
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="3" align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</div>
<div align="center" id="Layer2" style="border:solid;">
<form id="form3" name="form3" method="post" action="srch-index.php?distt=<?php echo $_GET['distt']; ?>&sch=<?php echo $_GET['sch']; ?>">
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
    <tr>
      <td colspan="2" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td><div align="center" class="style4">
            <div align="left">WELCOME Guest</div>
          </div></td>
          <td><div align="right" class="style5"></div></td>
        </tr>
      </table>
      </td>
      <td width="23%"><div align="right" class="style3">
        
          <div align="right"><a href="javascript:void(0)" onclick="closLayer()">X</a></div>
      </div></td>
    </tr>
    
    <tr>
      <td width="30%"><div align="right"><strong>E-mail: </strong></div></td>
      <td width="47%"><input name="email" type="text" id="email" size="30" /></td>
      <td>
        <div align="left">
          <input name="go" type="submit" id="go" value="Go" />
          </div></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="left">
	  <?php
	  	if(isset($_POST['go']) && $_POST['go']=="Go")
	  	{
	  			if(isset($_POST['email']) && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) )
					echo '<b><font color="red">Enter a valid email...!</font></b>';
				else
				{
					$query="select * from tblguest where gemail='".$_POST['email']."'";
					$result=mysql_query($query) or die("Error in query");
					
					if(mysql_affected_rows()>0)
					{
						$_SESSION['gemail']=$_POST['email'];
						echo '<script language="javascript"> document.location="srch-index.php?distt='.$_GET['distt'].'&sch='.$_GET['sch'].'"</script>';
					}
					else
					{
						echo '<b><font color="red">Enter a valid E-mail and E-code...!</font></b>';
					}
				}
			}
	  ?>	  </td>
      </tr>
    <tr>
      <td colspan="3" align="left"><span class="style4">NEW Guest</span></td>
    </tr>
    <tr>
      <td colspan="3"><div id="newguest">
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td width="26%"><div align="right"><strong>Name: </strong></div></td>
              <td width="74%" align="left"><input name="name" type="text" id="name" size="30" /></td>
              </tr>
          <tr>
            <td><div align="right"><strong>Contact no.: </strong></div></td>
              <td align="left"><input name="contactno" type="text" id="contactno" size="30" />
              <input name="submit" type="submit" id="submit" value="Submit" /></td>
              </tr>
          <tr>
            <td colspan="2">
			<div align="center">
			    <?php
			if(isset($_POST['submit']) && $_POST['submit']=="Submit")
	  		{
		  		if(isset($_POST['email']) && !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
					echo '<b><font color="red">Enter a valid email...!</font></b>';
	  			else if(isset($_POST['name']) && strlen($_POST['name'])<2)
					echo '<b><font color="red">Enter a valid name...!</font></b>';
	  			else if(isset($_POST['contactno']) && strlen($_POST['contactno'])!=10)
					echo '<b><font color="red">Enter a valid phone number...!</font></b>';
				else
				{
					$ecode=date("y")+date("m")+date("d")+date("w")+date("H")+date("i")+date("s").(rand()%99);
					$query="insert into tblGuest values('".$_POST['name']."','".$_POST['contactno']."','".$_POST['email']."',".$ecode.")";
					
					mysql_query($query) or die("<b><font color='red'>Error: Duplicate E-mail or Phone number...!</font></b>");
					if(mysql_affected_rows()>0)
					{
						echo '<b><font color="red">E-code sent to ur E-mail & Mobile. Re-enter in Welcome Guest!</font></b>';

					}
				}
			}
		  	?>		  	
			    </div></td>
            </tr>
        </table>
      </div></td>
      </tr>
  </table>
  </form>
</div>
</body>
</html>