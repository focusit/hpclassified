<?php
$rno=$_GET['sno'];
while($rno<=$_GET['eno'])
{
	$myfile="http://results.smude.edu.in/StudResult.asp?studrollno=5109".$rno;
	$fp = fopen("http://results.smude.edu.in/StudResult.asp?studrollno=5109".$rno,"r");
	if (!$fp)
	{
	    echo "$errstr ($errno)<br />\n";
	} 
	else
	{
		$flag=0;
		while (!feof($fp))
		{
			$finstr=fgets($fp);
			if (preg_match("/Invalid/",$finstr,$matches))
			{
				break;
			}
			if(preg_match("/00931/",$finstr,$matches))
			{
				$flag=1;
			}
			if($flag)
			{
				if(preg_match("/RITIKA/",$finstr,$matches) or preg_match("/SHIWALI/",$finstr,$matches) or preg_match("/ANJANA/",$finstr,$matches) or preg_match("/GAURAV/",$finstr,$matches) or preg_match("/ROHIT/",$finstr,$matches) or preg_match("/MAAN SINGH/",$finstr,$matches) or preg_match("/GEETA/",$finstr,$matches) or preg_match("/TILOTMA/",$finstr,$matches))
				{
        			$fp1 = fopen("http://results.smude.edu.in/StudResult.asp?studrollno=5109".$rno,"r");
					if (!$fp1)
					{
	    					echo "$errstr ($errno)<br />\n";
					}	 
					else
					{
						while (!feof($fp1))
						{
			       				echo fgets($fp1);
						}
		   				fclose($fp1);
					}
					break 2;	
				}
			}
	    	}
	    	fclose($fp);
	}
	echo " | ".$rno;
	$rno=$rno+1;
}
?>
