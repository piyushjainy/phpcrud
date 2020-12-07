<html>
<body>
<?php
  $x=$_REQUEST["roll"];
  $con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

$rsStudent=mysql_query("select * from student where sid='$x'");

$row=mysql_fetch_array($rsStudent);

$nm=$row["sname"];
$ag=$row["sage"];
$crs=$row["scourse"];

?>


<form method="post" action="updateStudent.php">
  <input type="hidden" name="txtRoll" value="<?php echo($x); ?>">
Enter Name <input type="text" name="txtName" value="<?php echo($nm) ?>" /> <br /><br>
Enter Age <input type="text" name="txtAge" value="<?php echo($ag) ?>" /><br /><br>
Enter Course Name <input type="text" name="txtCourse" value="<?php echo($crs) ?>" /><br /><br>

<input type="submit"  value="Ok"/>


</form>



</body>
</html>