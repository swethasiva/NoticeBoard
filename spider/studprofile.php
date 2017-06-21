<html>
    <style>
     body
        {
            background: url(back.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>    
<body>
<?php
session_start();
$un = $_SESSION['uname'];

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
 
    $sql = "select * from student where uname='".$un."'";
    $res = mysql_query($sql,$conn);
    
   // echo $res;
    
    ?>
<table border="1" align="center">
    <caption>My Profile</caption>
    <tr><th>Name</th>
    <th>Email</th>
        
    </tr>

<?php
while($row= mysql_fetch_assoc($res))
{
    ?>
     <tr><td><?php echo $row["uname"] ?></td> 
         <td><?php echo $row["email"] ?></td>
         
         </tr>
    <?php
}
    }
    


?>
    
    <a href="studentmenu.php">Back</a>