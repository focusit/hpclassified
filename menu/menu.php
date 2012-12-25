<?php 
$distt=$_GET['distt'];
echo '<div id ="classifiedMenu">';
$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%','selc%');
$aa=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','?');
for($x=0;$x<=26;$x++){
	echo '<div class ="menuChar">
    '.$aa[$x].'</div>';
	echo '<div class ="menuItem"> <ul id="sddm"> <li>'; 
	echo   '<a href="#" onmouseover="mopen(\'m'.($x+1).'\')" onmouseout="mclosetime()" style="width:164px;" >';
	$i = $x;
	$q=mysql_query("select Category_name from category where Category_name LIKE '$a[$x]' order by Category_name");
	$r=mysql_fetch_array($q);
	echo $r[0];
	echo '</a>';
    echo '<div id = "m'.($x+1).'"onMouseOver="mcancelclosetime()" onMouseOut="mclosetime()" >';
	$k=$x;
	$j = $k;
	while($k<=$j){
		$query=mysql_query("select * from category where Category_name LIKE '$a[$x]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query)){
			$name=$row["Category_name"];
			echo '<a href="searchlist.php?cx=partner-pub-4054722060796028%3A2716234000&cof=FORID%3A10&ie=UTF-8&q='.$name.'&sa=Search&distt='.$distt.'">'.$name.'</a>';
		}
   		$k++;
				
	}
    echo '</div></li></ul></div>';
}
echo '</div>';
?>