<html>
<body>
<form method="get" action='delStudent.php'>

<?php

include("dbConnect.php");

$rsStudent=mysql_query("select * from student order by sname");

echo("Choose Student Name : ");

echo("<select name='cmbStudent'>");

  while($row=mysql_fetch_array($rsStudent))
  {
	  $id=$row["sid"];
	echo("<option value='$id'>");
	  echo($row["sname"]);
    echo("</option>");  
  }


echo("</select>");



?>

  <input type="submit" value="Delete Student" />
</form>


</body>
</html>