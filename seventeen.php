<?php

include 'head.html';
    echo "<h1> <----: Static function inside the class :----> </h1> ";
    class employee
    {
       public $num1,$num2;
        static function show()
        {
            echo "<h2> <i> This is an employee class </i> </h2>";
        }
    }
    employee::show();
    
    class declre
    {
           // class with no properties and methods.
    }
    $d1=new declre();
    $d1->name="ANAND";   // implicitly creating of the properties of a class.   
    $d1->Emp_code="0035";
    echo $d1->name;
    echo"<br>";
    echo $d1->Emp_code;
