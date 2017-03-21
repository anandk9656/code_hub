<?php
   //  phpinfo(); // In-built function, gives inforamtion of the php.
    echo"<h1> <----:  <i>Predefined function in php</i> :----> </h1>";
    echo" String reverse function (strrev) : ".strrev("DNANA");
    echo "<br> <br>";
    echo"String repeat function (str_repeat) : ".  str_repeat(" php ", 5);
    echo "<br> <br>";
    echo "String to upper function (strtoupper) : ".  strtoupper("programming language");
    echo "<br> <br>";
    echo "String to lower function (strtoupper) : ".  strtolower("JAVA SCRIPT");
    echo "<br> <br>";
    $text="ANAND";
    $lower=strtolower($text);
    echo $lower."<br> <br>";
    echo" ( ucfirst ) function to set first alphabet to Capital:  ". ucfirst($lower)."<br> <br>";  
    echo "Embedded strtolower within ucfirst : ".ucfirst(strtolower("PROGRAMMING"));   // embedded strtolower in ucfirst function.
    echo "<br> <br>";
    echo"<----: print function :---->"."<br> <br>";
    print(10-4)." : is (10-4)"; echo"<br>";
    print (sqrt(625))." :  is square root of 625";
    echo"<br> <br>";
    
    echo"<h3><u>Function with single return :</u> </h3>"."<br> ";
    $n1="aNanD";
    $n2="ShuBhaM";
    $n3="subrAT";
    function name($n1,$n2,$n3)
    {
        $n1=  ucfirst(strtolower($n1));
         $n2=  ucfirst(strtolower($n2));
          $n3=  ucfirst(strtolower($n3));
          return $n1." ".$n2." ". $n3;
    }
    echo name($n1, $n2, $n3);
    echo"<br> <br>";
    
    echo"<h3><u>Function with multiple  return as array :</u> </h3>"."<br>"; 
    $n1="aNanD";
    $n2="ShuBhaM";
    $n3="subrAT";
    function names($a,$b,$c)
    {
        $a=  ucfirst(strtolower($a));
         $b=  ucfirst(strtolower($b));
          $c=  ucfirst(strtolower($c));
          return array($a,$b,$c);
    }
    $arr= names($n1, $n2, $n3);
    echo $arr[1]." ". $arr[0];
 
    echo"<br> <br>";
    echo"<h3>Using Global values in function by global keyword</h3> ";
    $a=10;
    $b=20;
    function sum()
    {
        global $a;
        global $b;
        global $sum;
        $sum=$a+$b;
        echo "Sum of 10 and 20 is : ".$sum;
    }
    sum(); echo"<br>";
    echo $sum;
    
    echo "<br> <br>";
    echo "<h3> Returning global variables </h3>"."<br>";
    $x=10;
    $y=20;
    $z=30;
    echo $x." ".$y." ".$z ."<br> <br> ";
    show();
    echo $x." ".$y." ". $z;
    function show()
    {
        global $x; ++$x;
        global $y; ++$y;
        global $z; ++$z;
    }
?>
