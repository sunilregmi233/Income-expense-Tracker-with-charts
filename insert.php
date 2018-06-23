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


    $type = $_POST['type'];
    $username = $_POST['username'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $income = $_POST['income'];

   

    if(!mysql_query("INSERT INTO account(type,username,amount,date,income) VALUES ('$type','$username', '$amount','$date','$income')", $con))
    {
      echo"Not inserted";

    }
    else
    {
      echo "Inserted";
    }
    
?>

<a href="index.php"><button>Go Back</button></a>