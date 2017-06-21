<?php

session_start();
//$name = $_SESSION['title'];
$old = $_POST['t1'];
$new = $_POST['t2'];




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

$sql = " update student set cr = 0 where uname  = '".$old."'" ;
$result = mysql_query($sql,$conn);
    
$sql = " update student set cr = 1 where uname  = '".$new."'" ;
$result = mysql_query($sql,$conn);
    

/*if( $result == 1)
{
    echo "Registered Successfully!!";
    
}
    else
    {
        echo "Sorry Registration Unsuccessfull!!!";
    } */
    
    
    header('Loacation:adminmenu.php');
mysql_close($conn);

}


?>


