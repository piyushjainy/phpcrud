<html>
<body>
<?php

   $x=$_REQUEST["roll"];

$con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

mysql_query("delete from student where sid=$x") or die("Query Error");

?>
Your data has been deleted
</body>
</html>