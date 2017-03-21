<?php
    session_start();
 ?>

<?php 
    if(isset($_GET['username']) && isset($_GET['pwd']))
    {
        $_SESSION['name'] = $_GET['username'];
        $_SESSION['value'] = $_GET['pwd'];
    }  
?>

<?php
     if(isset($_GET['in']))
      {
         header("location: login.php");
      }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Page </title>
        <link href="session.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <h1>
           Session Concept
        </h1>
      <div class="formdata">
            
         <form method="get" action="index.php">
                
            <label> UserName:- </label>
            
                <input type="text" name="username"> <br> <br>
                
            <label> Password </label>
            
            <input type="password" name="pwd"> <br> <br>
            
            <input type="submit" name="in" value="Login"> 
            
        </form>
            
     </div>
        
    </body>
    
</html>