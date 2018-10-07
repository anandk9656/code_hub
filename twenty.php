<?php
include 'head.html';    
    echo"<h1>Constructor & Destructor in php</h1>";
    echo"<h2> Default constructor in php </h2>";
    class defaut{
        public $name="Anand Kumar";
                function __construct() {
                        echo"This is a <b>default constructor</b>";
                        echo "<br>";
                }
                function put(){
                    echo"This is <b>put function</b>, "."My name is : ".$this->name;
                }
    }
    $d1=new defaut();
    $d1->put();
    echo"<br>";
    
    echo"<h2> Parameterized Constructor in php </h2>"; 
    class user{
        public $a,$b;
        function __construct($a,$b){
            echo"This is a <b>Parameterized constructor</b>";
            echo "<br>";
            echo $this->a=$a;
            echo"<br>";
            echo $this->b=$b;
            echo"<br>";
        }
        function show(){
            echo "This is <b>show function</b>";
        }
    }
 $obj = new user(12,15);
 $obj->show();
 include 'foot.html';
