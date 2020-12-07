<html>
<body>

<?php
 $a=$_REQUEST["txtRoll"];
 $b=$_REQUEST["txtName"];
 $c=$_REQUEST["txtAge"];
 $d=$_REQUEST["txtCourse"];   

  $con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

mysql_query("update student set sname='$b',sage='$c',scourse='$d' where sid='$a'") or die("Query error");

echo("Your data has been updated");
?>

</body>
</html>