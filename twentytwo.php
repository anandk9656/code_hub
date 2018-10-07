<?php
    include 'head.html';
    echo"<h1>Final keyword in php</h1>";
    class admin{
    final function show(){  // remove final to see working
            echo "This is show method of admin class (parent class) ";
            echo"<br>";
        }
    }
    class user extends admin{
        function show(){
              echo"This is <b>show method</b> of user class (child class)";
        }
/*        function aces()    // this function is used to access the show() function of parent class.
        {
           parent::show();    // syntax of how to use the parent class method.
        }
 */
    }
    $u=new user;
    $u->show();  
   // $u->aces(); used to acces the parent class method by the object of child class with same function name.
   include 'foot.html';
