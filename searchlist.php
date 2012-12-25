<?php include("header.php"); ?>
<div style="margin: 0 auto; width:1000px; height: 500px; clear:both;">
    
   <div id="ad-left" style="width:150px; float:left;">
       
	   <div style="text-align:center; width:150px;">
       	<img src="images/nath_boot_house.png" />
	   
		</div>
   </div>
	<div id="search-listing" style="width:850px;float:left">
        <?php
		if(isset($_GET['q'])){
			$name=$_GET['q'];
			$query=mysql_query("select * from business_detail where Category like '%$name%' ");
			$numrows=mysql_num_rows($query); 
			if(mysql_affected_rows()>0){
				echo '<div id="search_result" class="clearfix">';
				echo '<div id="heading" align = "Center">'.$numrows.' Results found for '. $name .' </div>';
				while($row=mysql_fetch_array($query)){
					$Title=$row["Title"];
					$Category=$row["Category"];
					$Email_id=$row["Email_id"];
					$Contact_No=$row["Contact_No"];
					$Address=$row["Address"];
					$State=$row["State"];
					$Distt=$row["Distt"];
					$Map=$row["Map"];
					$Description=$row["Description"];
					echo '<div class="item clearfix"><div class="title">' . $Title  .  " - " . $Distt . '</div>';
					echo '<div class="iteminfo"><img src="images/business/default.jpg" align="left">';
					echo substr($Description, 0,  250) ;
					if (strlen($Description)>250) echo '<span style="color:red;text-decoration:blink">...</span>';
					echo '<div class="contact"> <br> Email: <a href="mailto:' . $Email_id . '">'.  $Email_id . '</a>'. 
					 ' Call:' . $Contact_No . '<br>
					<span class="list-action"><a href="#">Contact me </a> 
					| <a href="#">SMS Me </a>
					| <a href="#">Mail Me </a>
					| <a href="#">Tell a Friend </a>
					| <a href="#">Details</a>
					</span></div></div></div>';
				}
				echo '</div>';?>
				<div style="text-align:center; float:right;"><img src="images/himachal-classified-for-free-listing.gif" width="300" height="160" /><br />
				
	  </div>	<?php			
		   } 
		   else
		   {
		   echo '<hr width="600px" align="center"><div bgcolor="#e8eefa">Sorry no information is available for this category.</div>';
		   }
		}
	?>
    
    <!-- Google ad result -->
    <div id="cse-search-results"></div>
		<script type="text/javascript">
          var googleSearchIframeName = "cse-search-results";
          var googleSearchFormName = "cse-search-box";
          var googleSearchFrameWidth = 800;
          var googleSearchDomain = "www.google.co.in";
          var googleSearchPath = "/cse";
        </script>
        <script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script> <!-- Google ad result -->
	
    </div>

</div>
<?php include("footer.php") ?>