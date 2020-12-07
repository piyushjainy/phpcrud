<html>
<body>

<?php
$con=@mysql_connect("127.0.0.1","root","") or die("Connection Error");

@mysql_select_db("college",$con) or die("Database Selection Error");

$rsStudent=mysql_query("select * from student");
/*
$row=mysql_fetch_array($rsStudent);



$row=mysql_fetch_assoc($rsStudent);

$row=mysql_fetch_row($rsStudent);

  
  
 mysql_result($rsStudent,0);
$row=mysql_fetch_row($rsStudent);
echo($row[1]);

//echo(mysql_num_rows($rsStudent));

//echo(mysql_num_fields($rsStudent));



//print_r($row);

//print($row["sname"]);

//echo($row["sid"]);
//echo($row[1]);
*/


echo("<table border='1'>");
echo("<tr><th>Sl. No.</th><th> Student Id</th><th>Student Name </th><th>Age </th><th>Course </th><th>Status</th></tr>");
$cnt=0;
while($x=mysql_fetch_array($rsStudent))
{
	$cnt++;
	echo("<tr>");
      echo("<td>$cnt</td>");
	 echo("<td>");
		echo($x["sid"]);
	 echo("</td>");

     echo("<td>");
		echo($x["sname"]);
	 echo("</td>");
	 
      echo("<td>");
		echo($x["sage"]);
	 echo("</td>");

     echo("<td>");
		echo($x["scourse"]);
	 echo("</td>");


     echo("<td>");
	 
	     $id=$x["sid"];
		echo("<a href='deleteStudent.php?roll=$id'>Delete</a>");
		
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
		
		echo("<a href='editStudent.php?roll=$id'>Edit</a>");
		
	 echo("</td>");


   echo("</tr>");


}
echo("</table>");


?>

</body>
</html>