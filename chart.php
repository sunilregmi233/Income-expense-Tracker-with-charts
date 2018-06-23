<?Php
       
    $dbhost = 'localhost';
    $dbname = 'test';  
    $dbuser = 'root';                  
    $dbpass = ''; 
    
    
    try{
        
        $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
        $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }catch(PDOException $ex){
        
        die($ex->getMessage());
    }
    $stmt = $dbcon->prepare("SELECT * FROM account ORDER BY amount ASC");
    $stmt->execute();
    $json= [];
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $json[]= array( 'date' => $date, 'income'=> (double)$income, 'amount' => (double)$amount);
        $json2[] =array('type' => $type, 'income'=> (double)$income, 'amount' => (double)$amount);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Displaying Mysql Records With Morris Js</title>
     <link rel="stylesheet" href="morris.css">
</head>
<body>

<h1>Bar Chart of Expense and Income</h1>
<div id="myfirstchart" style="height: 400px;"></div>
<div id="myfirstchart2""></div>

<style>
.myfirstchart2.morris-hover.morris-default-style{
	top:500px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 <a href="index.php"><button>Home Page</button></a>

<script type="text/javascript">
    new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: <?php echo json_encode($json); ?>,
  barColors: ['red'],
  // The name of the data record attribute that contains x-values.
  xkey: ['date'],
  // A list of names of data record attributes that contain y-values.
  ykeys: ['income','amount'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Income Amount', 'Expense Amount']
});
</script>



<br/>


<script type="text/javascript">
    new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart2',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: <?php echo json_encode($json2); ?>,
  barColors: ['red'],
  // The name of the data record attribute that contains x-values.
  xkey: ['type'],
  // A list of names of data record attributes that contain y-values.
  ykeys: ['income','amount'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Income Amount', 'Expense Amount']
});
</script>
<br/>


</body>
</html>


