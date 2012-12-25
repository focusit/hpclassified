<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Himachal Classified, <?php if(isset($_GET[('distt')])) echo $_GET[('distt')];?> </title>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="classifiedmenu.js" type="text/javascript" ></script>
<script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">

<!-- for news script -->

		<!-- jQuery library -->
		<script type="text/javascript" src="jquery/lib/js/jquery/_oldies/jquery-1.3.min.js"></script>
		<!--<script type="text/javascript" src="../lib/js/jquery/jquery-1.6.2.min.js"></script>-->
		
		<!-- jQuery Plugin scripts -->
		<script type="text/javascript" src="jquery/lib/js/jquery/jquery.easing.1.3.min.js"></script>
		<script type="text/javascript" src="jquery/lib/js/jquery/jquery.mousewheel.min.js"></script>
		
		<!-- Slider Kit scripts -->
		<script type="text/javascript" src="jquery/lib/js/sliderkit/jquery.sliderkit.1.8.min.js"></script>

		<!-- Slider Kit launch -->
		<script type="text/javascript">
			$(window).load(function(){ //$(window).load() must be used instead of $(document).ready() because of Webkit compatibility				
				// News slider > Horizontal
				$(".newslider-horizontal").sliderkit({
					shownavitems:3,
					panelfx:"sliding",
					panelfxspeed:1000,
					panelfxeasing:"easeInOutExpo", //"easeOutExpo", "easeOutCirc", etc.
					mousewheel:true,
					keyboard:true,
					fastchange:false
				});
	
			});	
		</script>
		
		<!-- Slider Kit styles -->
		<link rel="stylesheet" type="text/css" href="jquery/lib/css/sliderkit-core.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="jquery/lib/css/sliderkit-demos.css" media="screen, projection" />
		<!-- Slider Kit compatibility -->	
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie6.css" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie7.css" /><![endif]-->
		<!--[if IE 8]><link rel="stylesheet" type="text/css" href="../lib/css/sliderkit-demos-ie8.css" /><![endif]-->

		<!-- Site styles -->
		<link rel="stylesheet" type="text/css" href="jquery/lib/css/sliderkit-site.css" media="screen, projection" />
<!-- extra script ends -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery/lib/js/jquery/jquery-1.7.1.min.js"></script>
</head>
<body>
<?php $distt=$_GET['distt']; 
include_once("select.php");?>

<div  class="header">
&nbsp;<a href="index.php"><img src="images/home.png" height="12" align="bottom" title="Home : Himachal Classifieds"></a>&nbsp;
<span style="background-color:#01265d;width=800px;color:#999999">

<a href="list.php?distt=Bilaspur">Bilaspur</a> | 
<a href="list.php?distt=Chamba">Chamba</a> | 
<a href="list.php?distt=Hamirpur">Hamirpur</a> | 
<a href="list.php?distt=Kangra">Kangra</a> | 
<a href="list.php?distt=Kinnaur">Kinnaur</a> |
<a href="list.php?distt=Kullu">Kullu</a> | 
<a href="list.php?distt=Lahul-Spiti"> Lahul &amp; Spiti</a> |
<a href="list.php?distt=Mandi">Mandi</a> | 
<a href="list.php?distt=Shimla">Shimla</a> |
<a href="list.php?distt=Sirmaur">Sirmaur</a> | 
<a href="list.php?distt=Solan">Solan</a> | 
<a href="list.php?distt=Una">Una</a> |</span>

<span id="CollapsiblePanel1" class="CollapsiblePanel" style=" float:right;text-align:left; margin-top:4px ; position:relative">
  <span class="CollapsiblePanelTab" tabindex="0" id="myaccount">
  
  <?php 
		@session_start();
		echo $_SESSION['uid'];
		if(isset($_SESSION['uid']))
		{
			echo 'Welcome '.$_SESSION['name'].'
  </span>
  
  <span class="CollapsiblePanelContent">
		<ul>
			<li></li>
			<li><a href="#">Edit Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	 </span>';
			//echo "<h4>Welcome ".$_SESSION['name']."</h4>";
		}
		else
		{
			echo 'Login Here
  </span>
  
  <span class="CollapsiblePanelContent">
	<form id="form1" name="form1" method="post" action="login.php">
	Name<br /><input type="text" size="15" name="user" /><br />
  	Password <br /><input type ="text" name="pswd" size="15"  />
  	<input type="hidden" name="dist" value="<?php echo $distt?>" />
	<br /> <input type="submit" value ="Go"/>
</form> </span>';
		}
?>

</span></div>



<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
//-->
</script>

<script language="javascript"> 
function rndImage()
{
	var randomimg=Math.floor(Math.random()*6)
	var tdsrchbg='<table width="634px" height="137px" background="images/hp-classified-'+randomimg+'.gif"><tr><td align="center" valign="middle">'
	+'<form action="searchlist.php" id="cse-search-box">'
    +' <div><input type="hidden" name="cx" value="partner-pub-4054722060796028:2716234000" />'
    +' <input type="hidden" name="cof" value="FORID:10" /><input type="hidden" name="ie" value="UTF-8" />'
    +' <input type="text" name="q" size="55" /><input type="submit" name="sa" value="Search" />  </div>  </form>'
    +'</td></tr></table>';
	document.getElementById("td-search-bg").innerHTML=tdsrchbg;
}
</script>
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">google.load("elements", "1", {packages: "transliteration"});</script>
    <script type="text/javascript" src="http://www.google.com/cse/t13n?form=cse-search-box&t13n_langs=hi"></script>
    <script type="text/javascript" src="http://www.google.co.in/coop/cse/brand?form=cse-search-box&amp;lang="></script>


<body onLoad="rndImage();">

	<div style="margin:100px auto; width:600px; ">  
    <center><img src="images/himachal.gif" width="400" height="100" alt="Himachal Pradesh Classified" />
            <div id="td-search-bg">
            </div>
    </center>
    
     
       
       
    
    
</div>		

<div style="margin:10px auto; padding-top:10px clear:both; position:absolute; bottom:0px; width:100%">
	<div style="float:left;  color:#000000;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px; bottom:0px; margin:10px;">
	<a href="#" target="_parent">Privacy Policy</a> | <a href="#" target="_parent">Terms & Conditions</a> | <a href="#" target="_parent">How to Partner with HPC</a> | <a href="#" target="_parent">Disclaime</a>r | <a href="#" target="_parent">Sitemap </a><br />

      Powered by :- <a href="http://www.focus-itech.com">www.focus-itech.com</a><br>
	  Best viewed in 1024 x 768 on Mozilla Firefox
	</div>
	<div style="float:right; margin:10px;">
		<a href="/"><img src="images/logo-down.gif" alt="logo himachal pradesh" width="254" height="58" border="0" /> </a>
	</div>
</div>
</body>
</html>



