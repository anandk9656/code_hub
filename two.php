<?php
     echo" <h1> <----: Variables in php :----> <br> <br> </h1>";       
    // variables in php
    $number= 123;              // integer
    $decimal=12.45;            // Float
    $name="Anand_Kumar";      // string 
    
    // printing variable
    echo"Integer value :-  "; 
    echo $number;  // print the value stored in number variable 
    echo"<br>";  // break the line 
    echo"Float value :-  ";
    echo $decimal;
    echo"<br>"; 
    echo"String :- ";
    echo $name;
    echo"<br><br>"; 
    
    // var_dump function gives the type of variable along with their values.
    echo"var_dump function :- "."<br> "; // . is used to join two strings.
    var_dump($number);
    echo"<br>"; 
    var_dump($decimal);
    echo"<br>"; 
    var_dump($name);
?>

