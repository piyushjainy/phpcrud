<html>
<body>
<?php

$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtAge"];
$c=$_REQUEST["txtCourse"];


$x=$_FILES["flImage"];
//echo($x["type"]);
//echo($x["size"]);
//echo($x["name"]);
//echo($x["tmp_name"]);

$nm=$x["name"];

move_uploaded_file($x["tmp_name"],"collection\\$nm");


$con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

mysql_query("insert into student(sname,sage,scourse,img_path) values('$a','$b','$c','$nm')") or die("Query Error");


/*
mysql_query("delete from student where sid=1") or die("Query Error");

mysql_query("update student set sname='ramesh sahu',sage=23,scourse='php' where sid=3");
echo("Your data has been inserted.");

*/


?>

</body>
</html>