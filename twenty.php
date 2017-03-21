<?php
include 'head.html';    
    echo"<h1> <----: Constructor & Destructor in php :----> </h1>";
    echo"<h2> Default constructor in php </h2>";
    class defaut
    {
        public $name="Anand Kumar";
                function __construct() 
                {
                        echo"This is a default constructor";
                        echo "<br>";
                }
                function put()
                {
                    echo"This is put function, "."My name is : ".$this->name;
                }
    }
    $d1=new defaut();
    $d1->put();
    
    echo"<br><br>";
    
    echo"<h2> Parameterized Constructor in php </h2>"; 
    
    class user
    {
        public $a,$b;
        function __construct($a,$b) 
        {
            echo"This is a Parameterized constructor";
            echo "<br>";
            echo $this->a=$a;
            echo"<br>";
            echo $this->b=$b;
            echo"<br>";
        }
        function show()
        {
            echo "This is show function";
        }
    }
 $obj = new user(12,15);
 $obj->show();   
?>

