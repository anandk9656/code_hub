<?php
    include 'head.html';
    echo"<h1> <----: Calling Sub_Class Constructor :---->  </h1>";
    class bird
    {
        function __construct() 
        {
            echo "This is bird class constructor";
            echo "<br>";
        }
    }
    class parrot extends bird
    {
        function __construct() 
        {
            parent::__construct();   // this will call the parent class constructor i.e. bird.
            echo "This is parrot class constructor";    
        }
    }
    $p=new parrot(); // this will call the child class constructor i.e. parrot.
    
?>

