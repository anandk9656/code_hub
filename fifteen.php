<?php
    include_once  'head.html';
    echo" <h1> <----: Include and Require, Once :----> </H1> "."<br> <br>";
    include 'eight.php';
   
    
    echo "<h2><i>Checking the existence of the function by using ( function_exists ) in if-else condition.</i> </h2>"."<br> <br>";
    if (function_exists("array_combine"))
    {
        echo "Function exists";
    }   
    else
    {
        echo "Function does not exist - better write your own";
    }
   include_once 'eight.php';
    include 'foot.html';
    
?>
