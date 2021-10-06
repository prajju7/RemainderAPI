<?php
$task = $_POST["task"];
$due = $_POST["due"];
$zone = $_POST["zone"];

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
     $sql = "insert into kaleyra.tasks values ( '$task' , '$due' , '$zone' ) ;";
    //Prepare statement WHERE not exists(select * from kaleyra.tasks where t_do='$task' and due = '$due' and t_zone = '$zone')
     $result = $conn->query($sql);
        
   //echo "Inserted";
        header('Location: index.html');
        exit;
    }
?>
