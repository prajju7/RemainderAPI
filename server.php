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
        $sql = "select * from kaleyra.tasks order by due;";
        $result = $conn->query($sql);
        $p = array();
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
