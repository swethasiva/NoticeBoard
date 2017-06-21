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
    
    
p
    {
        color:blue;
    }
    
  li
    {
     display:inline;
     margin-left: 5px; 
     position:relative;
    top:50px;
    }
    
    a
    {
         text-decoration:none;
        border-style: solid;
        border-color: blueviolet;
        background-color: cornflowerblue;
        color: azure;
        padding: 10px;
        font-size: 20px;
    }
      
    
    
      </style> 
<body>
    

    <p>
    <?php
    session_start();
     $user = $_SESSION['uname'];   
    //echo $user;
        if($user!= "")
        {   
           //header('Location:menu.html');
            echo "<br><br>welcome    ".$user;
            ?>
        
        
        <center>
        <ul>
    
        <li><a href="newpost.html">Add Post</a></li>
        <li><a href="editpost.php">Edit Post</a></li>
        <li><a href='deletenote.php'>Delete File</a></li>
        <li><a href='viewpost.php'>View Post</a></li>
        <li><a href="assign.php">Class Rep</a></li>
        <li><a href='viewprofile.php'>View Profile</a></li>
        <li><a href='logout.php'>Logout</a></li>
        
    </ul>
            </center>
        <?php
        }
        
        else
        {
            echo "<h1>OOPS !!!! session expired<h1>";
        }
    
    
    ?>
    </p>
    
    
    
    
    
    
    
</body>

</html>