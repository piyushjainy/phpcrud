<html>
<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "college";


  $conn = new PDO("mysql:host=$servername;dbname=$dbname", "$username", "$password");
   
 $stmt = $conn->query("SELECT * FROM student");

while ($row = $stmt->fetch()) 
{
    echo( $row['sname']."---".$row["sage"] ."<br />\n");
}
  

$conn = null;

echo("<br>");

echo($_SERVER["PHP_SELF"]);

?>

</body>
</html>