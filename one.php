<?php
include 'head.html';
   echo" <h1> <----: Welcome to the php programming language :----></h1>";
   printf("<br>"); // its a function construct and return value as 1. It can take only one argument.
   echo("<br>"); // its a programming language construct and doesn't have any return type. It can have multiple arguments.
   print "Welcome to print command ";
   
   // comments :- It is a single line comment.
   /*
       mutiple line comments
       mutiple line comments
       mutiple line comments
    */
   echo"<br>";
   $number=1;
   echo'$number'; //context in between ' ' will be printed as it is.
   echo"<br>";  // context in between " " will print the text as well as the valus of the variable.
   echo $number."<br>";
   
    for($i=0; $i<10;$i++)
    {
        echo $i." = ".ord($i)."<br>";
    }
   include'foot.html';
