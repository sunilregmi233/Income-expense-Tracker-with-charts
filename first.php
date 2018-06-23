<table style="width: 1000px;" border="5">
	<tr>
		<th colspan="5"><h1>Expense and Income Record</h1></th>
	</tr>
	<tr>
		<td>Type</td>
		<td>Info</td>
		<td>Expense Amount</td>
		<td>Date</td>
		<td>Income</td>
	</tr>
	<br><br>
<a href="index.php"><button>goback</button></a>

<?php
 
    $con = mysql_connect("localhost","root","");
    if(!$con)
    {
      echo "not connected to server";
    }
    if(!mysql_select_db("test", $con))
    {
      echo "database not selected";
    }
    else {
    	echo "connected";
    }
 
$sql ="select * from account";
$qry = mysql_query( $sql, $con);
   
while($result = mysql_fetch_array($qry))
{
	echo"<tr>";
	echo"<td>".$result['type']."</td>";
	echo"<td>".$result['username']."</td>";
	echo"<td>".$result['amount']."</td>";
	echo"<td>".$result['date']."</td>";
	echo"<td>".$result['income']."</td>";
	echo "</tr>";
	
}


?>
<br><br>
<a href="chart.php"><button>View Chart</button></a>