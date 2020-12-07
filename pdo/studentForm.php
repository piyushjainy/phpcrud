<html>
<body>

<form method="post" enctype="multipart/form-data" action="<?php 
echo($_SERVER['PHP_SELF']);
?>">

Enter Name <input type="text" name="txtName" /> <br /><br>
Enter Age <input type="text" name="txtAge" /><br /><br>
Enter Course Name <input type="text" name="txtCourse" /><br /><br>

Choose your photo <input type="file" name="flImage"> <br><br>

<input type="submit" name="submit"  value="Ok"/>


</form>

<a href="displayStudent.php">Show All Students</a><br>

<a href="chooseStudentForDelete.php">Delete Any Students</a><br>
<?php
 if(isset($_POST["submit"]))
 {

	  $a= htmlspecialchars($_REQUEST["txtName"]);
	    
$b=$_REQUEST["txtAge"];
$c=$_REQUEST["txtCourse"];
echo("<br>");
echo($a);
echo("<br>");
echo($c);

$x=$_FILES["flImage"];

$nm=$x["name"];

move_uploaded_file($x["tmp_name"],"collection\\$nm");


$con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

mysql_query("insert into student(sname,sage,scourse,img_path) values('$a','$b','$c','$nm')") or die("Query Error");

 }

?>

</body>
</html>