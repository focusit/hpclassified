<? php
 mysql_connect("localhost" , "username" , "password");
 mysql_select_db("hpclass_db");
 $result = mysql_query("SELECT * FROM distt");
 ?>