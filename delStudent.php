<html>
<body>
<?php

   $x=$_REQUEST["cmbStudent"];

include("dbConnect.php");

mysql_query("delete from student where sid=$x") or die("Query Error");


header("location:chooseStudentForDelete.php");

?>

</body>
</html>