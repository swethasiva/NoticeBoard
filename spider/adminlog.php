<?php

session_start();

$u = $_POST['t1'];
$p = $_POST['t2'];

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
    
    $sql = "select * from admin where uname='".$u."' and password='".$p."'";
    
    $res = mysql_query($sql,$conn);
    
    $count = mysql_num_rows($res);
    //echo $count;
    if($count == 1)
    {
        //echo "Login success!!!";
        
        $_SESSION['uname'] = $u;
        header('Location:adminmenu.php');
    }
    else
    {
        echo "Invalid email or password !!!";
        echo "<a href='adminlog.html'>Retry</a>";
    }
    
}
mysql_close($conn);



?>