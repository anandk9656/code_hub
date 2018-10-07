<?php
    include_once  'head.html';
    echo" <h1>Include and Require, Once</h1> ";
    include 'eight.php';  
    echo "<h2><i>Checking the existence of the function by using ( function_exists ) in if-else condition.</i> </h2>";
    if (function_exists("parse_strs")){
        echo "Function exists";
    } else{
        echo "Function does not exist - better write your own";
    }
   include_once 'eight.php';
   include 'foot.html';
