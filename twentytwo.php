<?php
    include 'head.html';
    echo"<h1> <---: final keyword in php :---> </h1>";
    class admin
    {
    final  function show()
        {
            echo "This is show method of admin class (parent class) ";
            echo"<br>";
        }
    }
    class user extends admin
    {
        function show()
        {
              echo"This is show method of user class (child class)";
              echo"<br>";
        }
//        function aces()    // this function is used to access the show() function of parent class.
//        {
//            parent::show();    // syntax of how to use the parent class method.
//        }
    }
    $u=new user;
    $u->show();  
    // $u->aces();
   //  $u->aces(); used to acces the parent class method by the object of child class with same function name.
    
?>

