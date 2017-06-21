<?php

session_start();

$title = $_POST['t1'];
$message = $_POST['t2'];
$dop = $_POST['t3'];
$dos = $_POST['t4'];

$servername ="localhost";
$dbname="board";
$user="root";
$pwd="";

$conn = mysql_connect($servername,$user,$pwd);
mysql_select_db($dbname);

if($conn == null)
{
    echo "error in connection!!!";
    
}
else
{
 //echo $conn;
    
    $sql = "insert into note values('".$title."','".$message."','".$dop."','".$dos."') ";
    
    $res = mysql_query($sql,$conn);

    
    header('Location:adminmenu.php');
    
}
mysql_close($conn);



?>