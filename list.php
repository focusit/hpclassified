<?php 
include("header.php");?>

<div style="margin: 0 auto; width:1000px; height: 500px; clear:both;">
    
    <div class="clearfix" >
    	<div id="news" style="width:395px; height:212px;float:left; border:thin solid #0000CC;">
			<?php include("news.php") ?>
        </div>
        <span style="padding-left:5px;"> select any of the category</span>
        <div id="menu" style="float:right">
            <?php     include("menu/menu.php");    ?>
        </div>        
    </div>
   
    <div class="clearfix" style="width:1000px;">
		<div style="width:600px; height:200px; float:left" >
            <div id="ad-head" style=" height:20px">
           		<?php
				 $imglist='';
				 $img_folder = "ads/";
				  mt_srand((double)microtime()*1000);
				  //use the directory class
				 $imgs = dir($img_folder);
		  //read all files from the  directory, checks if are images and ads them to a list (see below how to display flash banners)
				 while ($file = $imgs->read()) {
				   if (preg_match("/gif/i", $file) || preg_match("/jpg/i", $file) || preg_match("/png/i", $file))
					 $imglist .= "$file ";
				 } 
				 closedir($imgs->handle);
				//put all images into an array
				 $imglist = explode(" ", $imglist);
				 $no = sizeof($imglist)-2;
				 //generate a random number between 0 and the number of images
				 $image1 = $img_folder.$imglist[mt_rand(0, $no)];
				 $image2 = $img_folder.$imglist[mt_rand(0, $no)];
				 $image3 = $img_folder.$imglist[mt_rand(0, $no)];
				?>

                This section will contain heading for advt.
            </div>

            <div id="advt1" style="width:200px; margin:auto; height:230px;;float:left;">
                <img src=<?php echo $image1; ?> >
            </div>
            <div id="advt3" style="width:200px; height:230px;float:left;margin:auto;">
                <a href="http://www.kqzyfj.com/click-5640920-10932607" target="_top">
<img src="http://www.lduhtrp.net/image-5640920-10932607" width="200"  alt="Take it off! 35% off .com domains at GoDaddy.com!" border="0"/></a>
            </div>
			<div id="advt2" style="width:200px; height:230px;margin:auto;float:left;">
                <img src=<?php echo $image2; ?> >
            </div>
                        
        </div>                              
    	<div style="width:400px;   float:left" >
             <div id="featured" style="width:385px; -webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;border:2px solid #006;background-color: #B7B9FF;float:left; padding:5px;">
                <div id="featured_title" style=" color:#FF0000; font-stretch:expanded; font-size:20px;"> Welcome to Focus i-Tech </div>
                <div id="features_img" style="width:100px; height:100px; float:left; padding:2px"><img src="images/your-logo-hare.gif" /> </div>
                               <div id="featured_summery" style="padding:5px; font:'Times New Roman', Times, serif; font-size:12px">  www.hpclassified.com is the product of <a href="http://focus-itech.com">Focus i-Tech Solutions Pvt Ltd,</a> Solan. This website is launched with the aim to serve as a local search engine. We intent to list each and every business in Himachal Pradesh. we all know that Himachal is one of the favourite tourist spot. We try to provide information about each and every service available in Himachal Pradesh at any corner. If you are service provider in Himachal Pradesh, We apeal you to kindly provide us with your information so that we can update our info base. The project hpclassified is currently under development. so visitors are requested to visit this site again in future. soon you will find all the information..</div>
            </div>
        </div>        
    </div>
</div>
<div>

</div>
<?php include("footer.php") ?>