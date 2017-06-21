<?php

session_start();

$u = $_POST['t1'];
$m = $_POST['t2'];
$p = $_POST['t3'];

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
    
    $sql = "select * from student where uname='".$u."' and email = '".$m."' and pwd1='".$p."' and  cr = 1";
    
    $res = mysql_query($sql,$conn);
    
    $count = mysql_num_rows($res);
    //echo $count;
    if($count == 1)
    {
        //echo "Login success!!!";
        
        $_SESSION['uname'] = $u;
        header('Location:crmenu.php');
    }
    else
    {
        echo "Invalid email or password !!!";
        echo "<a href='adminlog.html'>Retry</a>";
    }
    
}
mysql_close($conn);



?>