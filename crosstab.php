<html>
<body>
<?php
function mysqli_result($result, $iRow, $field = 0)
{
    if(!mysqli_data_seek($result, $iRow))
        return false;
    if(!($row = mysqli_fetch_array($result)))
        return false;
    if(!array_key_exists($field, $row))
        return false;
    return $row[$field];
}
$con=mysqli_connect("127.0.0.1","root","") or die("connect error");
mysqli_select_db($con,"contractor") or die("database error");

$ar=array(4,5,7,8,9,10,11);
$str="";
foreach($ar as $i)
{
  $str=$str."SUM(CASE ItemNo WHEN $i THEN Qty ELSE 0 END) Item".$i.",";
}
$sql="select PartyNo,$str 'Total' from purchasedetail where PartyNo in(1,2,4) group by PartyNo";

	   
$rs=mysqli_query($con,$sql) or die("Query error");
	$cc=mysqli_num_fields($rs);
	$rc=mysqli_num_rows($rs);
	
	  echo("<table border='1'>");
		echo("<tr>");
	         for($i=0;$i<=$cc-1;$i++)
			 {
				echo("<th>");
				  echo(mysqli_fetch_field_direct($rs,$i)->name);
				echo("</th>");
				 
			 }
		echo("</tr>");
		
		   for($i=0;$i<=$rc-1;$i++)
		   {
			   		echo("<tr>");
				   for($j=0;$j<=$cc-1;$j++)
		   			{
			   		echo("<td>");
                       
					   echo(mysqli_result($rs,$i,$j));
			   		
					echo("</td>");
						
					}
			   
			   		echo("</tr>");
		   }
		
		

	echo("</table>");	
	   

?>


</body>
</html>