<html>
<body>
<?php
/*
$x=time() - 24*60*60*3;
echo($x."<br>");

$y=date('d-m-Y',$x);

echo($y);
*/

/*   
  //how to convert array into string
$x=array("ram","mohan","sohan","chintu","mintu");
$y=implode("-",$x);
echo($y);
*/
/* 
//how to convert string into array 
$x="ram kumar sharma is my friend";
$y=explode(" ",$x);

echo($y[1]);
*/

//$x=array("ram","name"=>"mohan","address"=>"durg","chintu","mintu");

$x=array("BMW","a1"=>15,13);
/*
$x = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
*/
print_r($x);
$y=json_encode($x);
print("<br>");
print($y);
print("<br>");
$z=json_decode($y);
print_r($z);

?>

</body>

</html>