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
<a href="list.php?distt=Una">Una</a> |</span></div>

<div id="divhdr">
	<div style="float:left; width:150px; text-align:center">
    <img src="images/himachal_classified.png" />
    </div>
    
	<div id="search">
	 	<div class="login">
		<a style="color:#FFFFFF" href="#"> Login</a> | 
		<a style="color:#FFFFFF" href="#">Register</a> 
	</div>
	<div class="ads"><img src="images/latest_ads.png" /></div>
	<div class="left">Get connected to thousands people in your city. Search anything now in HPC</div> 
   	<form class="left" action="searchlist.php" id="cse-search-box">
    		<div style="padding:5px;"><input type="hidden" name="cx" value="partner-pub-4054722060796028:2716234000" />
    		<input type="hidden" name="cof" value="FORID:10" /><input type="hidden" name="ie" value="UTF-8" />
    		<input type="text" name="q" size="55" /><input type="submit" name="sa" value="Search" />  </div>  
    	</form> 
    <div class="left">
    	<a href="#"><img src="images/advr.jpg" /></a> 
    	<a href="#"><img src="images/business.jpg" /></a> 
    	<a href="#"><img src="images/blog.jpg" /></a> 
    	<a href="#"><img src="images/helpline.jpg" /></a>
    </div>
    <div class="left"> 
    	<a href="#">Why HPC</a> | 
	   <a href="#">Advantages</a> | 
   	<a href="#">How to Advertise</a> | 
    	<a href="#">Feedback</a> 
    </div>
   
	
	
	</div>
</div>