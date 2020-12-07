<html>
<body>
<?php
include("dbConnect.php");

if(isset($_REQUEST["pgno"]))
{
  $curpage=$_REQUEST["pgno"];
}
else
{
	$curpage=1;
}

$rs=mysql_query("select * from student");

$totalRow=mysql_num_rows($rs);
$noOfRecPerPage=3;

$noOfPages=ceil($totalRow/$noOfRecPerPage);
for($i=1;$i<=$noOfPages;$i++)
{
  echo("<a href='paging.php?pgno=$i'>");
  echo($i);
  echo("</a>");
  echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
}

$startPos=($curpage-1) * $noOfRecPerPage;
$rsFinal=mysql_query("select * from student limit $startPos, $noOfRecPerPage");



echo("<br><br><table border='1'>");
echo("<tr><th>Sl. No.</th><th> Student Id</th><th>Student Name </th><th>Age </th><th>Course </th><th>Status</th></tr>");
$cnt=0;
while($x=mysql_fetch_array($rsFinal))
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