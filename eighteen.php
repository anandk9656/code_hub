<?php
    include 'head.html';
    echo"<h1> <---: Declaring constant in a class :----> </h1>";
    class library
    {
        const ANAND ="0035";
        const SHUBHAM ="0036";
        const SUBRAT="0037";
       static function acc()
        {
            echo"value of \"ANAND\" constant is : ". self::ANAND;    echo "<br>"; // use self keyword with scope resolution operator :: for accessing constant value.
            echo self::SHUBHAM;   echo "<br>";
            echo self::SUBRAT;  
        }
    }
    $l1=new library();
    $l1->acc();
    echo"<br> <br>";
    library::acc();  // calling static function directlty with class name and function name.
    
    
    echo"<br> <br>";
    
    class teacher
    {
        static public $x="Teacher";
        function put()
        {
            return self::$x;  // need to return the static varaible with 'self' keyword. 
        }
    }
    $t1=new teacher;
    echo teacher::$x;  // static property called by class name with scope resolution operator.
    echo"<br>";
    echo $t1->put();  // static property called by class object with -> operator with function name,
    // echo $t1->x;   // gives error with class object.
?>

