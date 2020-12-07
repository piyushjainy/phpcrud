<html>
<body>

<?php

//PHP DATA OBJECT

 $conn = new PDO("mysql:host=127.0.0.1;dbname=college","root", "");
 
  $conn->exec("insert into student(sname,sage) values('Ashtha','22')");
  
  echo "New record created successfully";

$conn = null;

?>

</body>
</html>