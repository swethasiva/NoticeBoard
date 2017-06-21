<html>
<head>
    <style>
        form
        {
            background-color: bisque;
            position:relative;
            top:150px;
            width:500px;
            padding:20px;
            border-radius: 3em;
        }
        
        
        body
        {
            background: url(back.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>    
</head>
    <body>
    
  <?php 
        session_start();

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
 
    $sql = "select title from note";
    $res = mysql_query($sql,$conn);
    
    ?>
<center>
 <form action="delete.php" method="post">
    <table>
     <tr>
<th>CHOOSE NOTE</th><td><input list="fname"  name="t1" autocomplete="off"/>
                
                                <datalist id="fname">

<?php
      while($row= mysql_fetch_assoc($res))
{
    ?>
     <option> <?php echo $row["title"]; ?></option> 
        
                                    
                                    
                                    
    <?php
}
     ?>
                                    
  
        <tr>
        <td><input type="submit" value="Delete"/></td><th><a href = "adminmenu.php">Back</a></th>
        </tr>
    
    </table>
    </form>
    </center>  
                                    
<?php
                                
    }
        
        
    mysql_close($conn);

?>   
                                 
                     
     
    </body>

</html>