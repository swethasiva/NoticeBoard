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
 
    $sql = "select   uname from student where cr = 1";
    $res = mysql_query($sql,$conn);
    
    ?>
<center>
 <form action="change.php" method="post">
    <table>
       
     <tr>
<th>Current Class Reps</th><td><input list="fname"  name="t1" autocomplete="off" placeholder="Choose current class rep"/>
                
                                <datalist id="fname">

<?php
      while($row= mysql_fetch_assoc($res))
{
    ?>
     <option> <?php echo $row["uname"]; ?></option> 
        
                                    
                                    
                                    
    <?php
}
    $sql = "select  uname from student ";
     $res = mysql_query($sql,$conn);
     ?>
                                    
  
        
     
            
    
    
            
     <tr>
<th>Choose New Class Rep</th><td><input list="fname"  name="t2" autocomplete="off" placeholder="Choose new class rep"/>
                
                                <datalist id="fname">

<?php
      while($row= mysql_fetch_assoc($res))
{
    ?>
     <option> <?php echo $row["uname"]; ?></option> 
        
                                    
                                    
                                    
    <?php
}
                                    ?></datalist></td></tr>
                                    
  
        <tr>
        <td><input type="submit" value="Change / Assign"/></td><th><a href = "adminmenu.php">Back</a></th>
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