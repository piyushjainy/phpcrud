<html>
<body>
<?php

$db = new PDO("mysql:host=localhost;dbname=contractor","root","");
$sql="select ItemNo,ItemName from itemmaster where itemno in(select itemNo from purchasedetail where itemNo in(select itemNo from itemmaster where GroupNo in(2)) group by itemNo having count(*)>0)";
 $Result = $db->query($sql);
 $str1="";
 $itm="";
while($row=$Result->fetch(PDO::FETCH_ASSOC))
{
  $str1=$str1."SUM(CASE ItemNo WHEN ".$row['ItemNo']." THEN Qty ELSE 0 END) '".$row['ItemName']."',";
  $itm=$itm.$row['ItemNo'].",";	
}
$itm=substr($itm,0,strlen($itm)-1);
echo($str1);
$sql="select PurchaseId,".$str1." 'Total' from purchasedetail where itemNo in($itm) group by PurchaseId";
 $Result = $db->query($sql);
   $rc=$Result->rowCount();
   $cc=$Result->columnCount();
	  echo("<table border='1'>");

				echo("<tr>");			     
                  echo("<th>Sl.No.</th>");
				   for($j=0;$j<=$cc-1;$j++)
		   			{
			   		echo("<th>");
					$col = $Result->getColumnMeta($j);
					echo($col['name']);
			   		echo("</th>");					
					}
				echo("</tr>");	
$cnt=0;
for($i=0;$i<=$rc-1;$i++)
		   {
				$row=$Result->fetch(PDO::FETCH_NUM);

				echo("<tr>");			     
               echo("<td>".++$cnt."</td>");
				   for($j=0;$j<=$cc-1;$j++)
		   			{
			   		echo("<td>");
			   		    		echo($row[$j]);   
  				   echo("</td>");
						
					}
		   		echo("</tr>");
		   }
	echo("</table>");	
	
?>


</body>
</html>