<?php

// echo $_SERVER['REQUEST_METHOD'];
session_start();
$name = $_SESSION['title'];
$title = $_POST['t1'];
$message = $_POST['t2'];
$dop= $_POST['t3'];
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

$sql = " update note set title = '".$title."' where title = '".$name."'" ;
$result = mysql_query($sql,$conn);
    
$sql = " update note set message = '".$message."' where title = '".$name."'" ;
$result = mysql_query($sql,$conn);
    
$sql = " update note set dos = '".$dos."' where title = '".$name."'" ;
$result = mysql_query($sql,$conn);
    
$sql = " update note set dop = '".$dop."' where title = '".$name."'" ;
$result = mysql_query($sql,$conn);
/*if( $result == 1)
{
    echo "Registered Successfully!!";
    
}
    else
    {
        echo "Sorry Registration Unsuccessfull!!!";
    } */
mysql_close($conn);

}


?>


