<?php
  
  $username = "root";
  $password = "Prajwal@855";  
  $host = "localhost";
  $database="kaleyra";
 
$conn = new mysqli($host, $username, $password, $database);
    if (mysqli_connect_error()) 
    {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else
    {
        $sql = "select * from tasks where due BETWEEN DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 10 MINUTE) and ADDTIME(CURRENT_TIMESTAMP, \"0:10:0\");";
        $result = $conn->query($sql);
        $b = array();
        $r = array();
        while($row = $result->fetch_assoc())
      { 
          $b[] = $row;
     
      }
        //$r["row"] = $b;
        echo json_encode($b);
    }
  // close connection
?>
