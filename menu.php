<html>
<head>
<script language="javascript">
function send()
{document.location.href="list.php?distt="+document.getElementById("select your city").value};
var timeout	= 500;
var closetimer	= 0;
var ddmenuitem	= 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 

</script>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" bordercolor="#4aa7f7">
   <tr>
     <td><img src="images/a.gif"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m1')" 
             onmouseout="mclosetime()" style="width:164px;" >
	        <?php   
			include("select.php");
	        $a=array('A%');
	        $i=0;
			$q=mysql_query("select Category_name from category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m1"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >

	<?php
	include("select.php");
	$a=array('A%');
	$i=0;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=0)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td><img src="images/arrow.png" style="border:none;"/></td>
  <td><img src="images/b.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m2')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('B%');
	        $i=0;
			$q=mysql_query("select Category_name from category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m2" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=1;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=1)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/c.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m3')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('C%');
	        $i=0;
			$q=mysql_query("select Category_name from category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m3" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=2;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=2)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td>  <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>

   <tr>
     <td> <img src="images/d.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m4')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('D%');
	        $i=0;
			$q=mysql_query("select Category_name from category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m4"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=3;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=3)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td> <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/e.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m5')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('E%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m5" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=4;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=4)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/f.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m6')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('F%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m6" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=5;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=5)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td> <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td>  <img src="images/g.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m7')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('G%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m7"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=6;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=6)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/h.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m8')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('H%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m8" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=7;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=7)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td> <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/i.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m9')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('I%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m9" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=8;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=8)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td>  <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td> <img src="images/j.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m10')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('J%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m10"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=9;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=9)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/k.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m11')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('K%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m11" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=10;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=10)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/l.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m12')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('L%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m12" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=11;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=11)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td> <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td> <img src="images/m.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m13')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('M%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m13"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=12;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=12)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/n.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m14')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('N%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m14" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=13;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=13)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td><img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/o.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m15')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('O%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m15" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=14;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=14)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td>  <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td><img src="images/p.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m16')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('P%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m16"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=15;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=15)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td> <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/q.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m17')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('Q%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m17" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=16;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=16)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td>  <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/r.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m18')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('R%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m18" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=17;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=17)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td> <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td> <img src="images/s.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m19')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('S%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m19"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=18;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=18)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td> <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/t.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m20')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('T%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m20" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=19;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=19)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td><img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/u.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m21')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('U%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m21" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=20;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=20)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td> <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td> <img src="images/v.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m22')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('V%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m22"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=21;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=21)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td> <img src="images/arrow.png" style="border:none;"/></td>
  <td> <img src="images/w.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m23')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('W%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m23" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=22;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=22)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td> <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/x.gif" style="border:none;"/></td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m24')" 
        onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('X%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m24" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
        <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=23;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=23)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
    </div>
    </li>
  
</ul></td>

<td> <img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>
   <tr>
     <td><img src="images/y.gif" style="border:none;"/></td>
	 <td>
     <ul id="sddm">
       
	  <li>  <a href="#" 
             onmouseover="mopen('m25')" 
             onmouseout="mclosetime()" style="width:164px;" ><?php   
			include("select.php");
	        $a=array('Y%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
        <div id="m25"
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()" >
	
	<?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=24;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=24)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
        </div>
       </li>
  </ul></td>
  <td> <img src="images/arrow.png" style="border:none;"/></td>
  <td>  <img src="images/z.gif" style="border:none;"/></td>
    
	<td>
  <ul id="sddm">
	 
	   <li>  <a href="#" 
        onmouseover="mopen('m26')" 
        onmouseout="mclosetime()" style="width:164px;"><?php   
			include("select.php");
	        $a=array('Z%');
	        $i=0;
			$q=mysql_query("select Category_name from Category where Category_name LIKE '$a[$i]' order by Category_name");
			$r=mysql_fetch_array($q);
			echo $r[0];?></a>
       
        <div id="m26" 
            onmouseover="mcancelclosetime()" 
            onmouseout="mclosetime()">
    <?php
	include("select.php");
	$a=array('A%','B%','C%','D%','E%','F%','G%','H%','I%','J%','K%','L%','M%','N%','O%','P%','Q%','R%','S%','T%','U%','V%','W%','X%','Y%','Z%');
	$i=25;
	echo '<table width="183" border="0" cellspacing="0" cellpadding="0">';
	while($i<=25)
	{
	    echo '<tr><td>';
	    
		$query=mysql_query("select * from category where Category_name LIKE '$a[$i]' order by Category_name");
		$name="";
		while($row=mysql_fetch_array($query))
		{
		$name=$row["Category_name"];
		echo '<a href="searchlist.php?name='.$name.'&distt='.$distt.'">'.$name.'</a>';
		}
		
        echo '</td></tr>';	
     $i++;		
	}
	echo '</table>';
	?>
         </div>
    </li>
  
</ul></td>
<td> <a href="#"> <img src="images/arrow.png" style="border:none;"/></a></td>
  <td> <b style="color:blue; margin-left:5px;"> ? </b> </td>
  <td>
  <ul id="sddm">
	 
	   <li>  <a href="#" >Suggest Categories</a>
      
    </li>
  
</ul></td>

<td><img src="images/arrow.png" style="border:none;"/></td></tr>
</tr>

</table>
