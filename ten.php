<?php
    echo" <h2> <----: Operators in php :----> "."<br> <br> </h2>";
    echo " Boolean value for (20 > 1)  : [".(20>1). "] " ;    // boolean for true.
    echo"<br> <br>";                                        
    echo " Boolean value for (20 < 1) : [ ".(20<1)." ]";      // boolean for false.
    echo"<br> <br>";
    echo"True value in boolean : [".TRUE."] ";
    echo"<br> <br>";
    echo"False value in boolean : [".FALSE."] ";
    echo"<br> <br>";
    $name="Ankur";
    $code =37;
    echo "A For "."ANAND"."";
    echo "<br> <br>";
    echo "A is : " . 35;
    echo "<br> <br>";
    echo"Name is : ".$name;
    echo "<br> <br>";
    echo "Code is : ".$code;
    echo "<br> <br>";
    echo"Ternary Operator (20 < 1) :- " .(20<1?"Right":"Wrong") ;    // ternary operator. 
    echo "<br> <br>";    
    echo "Solution of ((1 + 2) * 3 - 4) * 5 : ". ((1 + 2) * 3 - 4) * 5;
    echo "<br> <br>";
    $x=100;
    $y="100";
    var_dump($x==$y);            // this will not check the type, it will check the value only ( == ).
    echo "<br> <br>";
    var_dump($x===$y);             // this will check the type and value both ( === ).
    echo "<br> <br>";
    $a=$b=$c=12;                       // multiple assignment.
    echo $b."<br>",$b."<br>",$c;
    echo "<br> <br>";
    $X=0;
    $Y=1;
    $p=1;
    $q=0;
    // logical operators 
   
    echo "<h2> <----: Logical Operators :----> </h2> ";
    echo "<br> <br>";
    echo " X (1) AND Y (1) : "."{" .($X AND $Y) ."}" ;
    echo "<br> <br>";
    echo "p (1) OR q (0) : " ."{" .($p OR $q) ."}" ;
    echo "<br> <br>";
    echo "NOT q (!q) : " . "{ ".(!$q) ."}" ; 
    echo "<br> <br>";
    echo "X (1) XOR Y (1) : ". "{" . ($X XOR $Y) ."}" ;
?>