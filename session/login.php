<?php
        session_start();
        
        if(isset($_SESSION['name']))
        {
            echo "<h1> Welcome ".$_SESSION['name']." to your session area.</h1>";
            echo "<br> <br>";
        }
 else {
     header("location: index.php");
 }
        echo "Your User Name is : ".$_SESSION['name']; echo  "<br> <br> ";
        echo "Your Login Password is : ".$_SESSION['value']; echo "<br> <br> ";
?>

<?php 
    if(isset($_GET['out']))
    {
        header("location :index.php");
    }
    session_destroy();
?>

<html>
    
    <head>
            <title>  Welcome Page </title>  
            <link href="session.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        
        <form method="get" action="index.php">
            click here to log out ..... <br> <br>
            <input type="submit" name="out" value="logout">
        </form>
        
    </body>
    
</html>