<?php
  $conn = new mysqli("localhost", "root", "", "college");
  
  if ($conn->connect_error) 
  {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  $result = $conn->query("SELECT * FROM student");
  
  
  
//  $rs=mysqli_query($conn,"select * from student");
//$res1=mysqli_fetch_array($result);
//$res1=mysqli_fetch_assoc($result);
//$res1=mysqli_fetch_row($result);

// $res1= $result->fetch_assoc();
// $res1= $result->fetch_row();
//  $res1= $result->fetch_array();
  
  print_r($res1);
//  echo "Number of rows: $result->num_rows";


  $result->close();

  $conn->close();
?>

<?php
/*
  try {
    $conn = new PDO("mysql:host=localhost;dbname=thegeekstuff", "root", "mySecretDBpass");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connected to the database.<br>';

    $sql = 'SELECT name FROM employee';
    
    print "Employee Name:<br>";
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "<br>";
    }
    $conn = null;

  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }
  */
?>
<?php
/*
$conn = mysql_connect('localhost', 'root', 'mySecretDBpass');
mysql_select_db("thegeekstuff");
if (!$conn) {
die('ERROR: Unable to connect: ' . mysql_error());
}

echo 'Connected to the database.<br>';

$result = mysql_query('SELECT name FROM employee');

$row = mysql_fetch_row($result);
echo "Employee 1: ", $row[0], "<br>\n";

mysql_close($conn);
*/
?>