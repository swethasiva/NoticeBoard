<?php

// echo $_SERVER['REQUEST_METHOD'];

$uname = $_POST['t1'];
$email = $_POST['t2'];
$pwd= $_POST['t3'];
$pwd1= $_POST['t4'];



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

$sql = "insert into student (uname,email,pwd,pwd1) values('".$uname."','".$email."','".$pwd."','".$pwd1."')";


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


