<html>


<body>
    
 <?php
    session_start();
    
    
    $name = $_POST['t1'];
    
    $_SESSION["title"] =$name;
    
    $server = "localhost";
    $db = "board";
    $user = "root";
    $pwd = "";
    
    $conn = mysql_connect($server,$user,$pwd);
    mysql_select_db($db);
    if($conn == null )
    {
        echo "connection error. Retry !!";
    }
    
    else
    {   echo "<h1>HOLLA !!!!</h1>";
        $sql = "select * from note where title = '".$name."'";
       $res =  mysql_query($sql,$conn);
        $row= mysql_fetch_assoc($res);
        
        
         ?>
                <form action="edited.php" method="post">
             <center>
    
                <table>
                 <tr><th>Title</th><th><input type = "text" required value="<?php echo $row["title"];  ?>" name = "t1"></th></tr>
                <tr><th>Message</th><th><textarea name="t2"><?php echo $row["message"];  ?></textarea></th></tr>
                <tr><th>Date Of Post</th><th><input type = "date" required value="<?php echo $row["dop"];  ?>" name = "t3"></th></tr>
                <tr><th>Date Of Submission</th><th><input type = "date" required value="<?php echo $row["dos"];  ?>" name = "t4"></th></tr>
                <tr><th></th><th><input type="submit" value ="EDIT"></th></tr>
                </table>
                 
            </center>
         </form>
               
     <?php   
        
        
    }
    
    
    
    
    
    ?>
    
</body>



</html>


