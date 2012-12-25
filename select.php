<?php
$hostname="localhost";
$username="hpclass_user";
$password="Another10\$";
$db_name="hpclass_db";
mysql_connect($hostname,$username,$password)or die("Can't connect to database");
mysql_select_db($db_name) or die ("Can't select database");
?> 