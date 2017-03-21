<?php
    // Function 
echo"<h1> <----: Function :---->  &  <----: Variable_scope :----> "."<br> <br> </h1>";
echo "1. Function without parameter and return type"."<br> <br>";
    function sum()
    {
        $num1=35;                   // num1 and num2 are local variable and will be used inside the function.          
        $num2=50;                   
        $s=($num1 + $num2);
        echo $s;
    }
    sum();  // function calling
    echo"<br> <br>"; 
     //  echo $num1;     This will give error as undefined variable.
   
echo "2. Function without parameter and with return type"."<br> <br>";
    function sum1()
    {
        $num1=45;                   // num1 and num2 are local variable and will be used inside the function.          
        $num2=120;                   
        return $s=($num1 + $num2);
    }
    echo sum1(); 
    echo"<br> <br>"; 
    
echo "3. Function with parameter and without return type"."<br> <br>";

    $numb1=1234;
    $numb2=4321;
    function sum2($n1,$n2)
    {    
        $s=($n1 + $n2);
        echo $s;
    }
    sum2($numb1,$numb2); 
echo"<br> <br>";

echo "4. Function with parameter and with return type"."<br> <br>";

    $num1=56;
    $num2=421;
    function sum3($n1,$n2)
    {    
       return $s=($n1 + $n2);
    }
    echo sum3($num1,$num2); 
echo"<br> <br>";

echo"5. Accessing global variable inside the function "."<br> <br>";

$glb1=12;   // global variable can't be used inside the function
$glb2=15;   // these variable can be used by adding the keyword 'global' in front of them, inside the function.
function glbal()
{
    global $glb1,$glb2; 
    $s=($glb1 + $glb2);
    echo $s;
}
glbal();
echo"<br> <br>";

echo"6. Static variable inside the function "."<br> <br>";

function stati()
{
   //  $stc=1;  gives the same value on each call
    static $stc=1;    // gives the last value when call
    echo $stc;
    $stc++;
}
stati();  echo"<br>";
stati();  echo"<br>";
stati();  echo"<br>";
stati();  echo"<br> <br>";

echo" <----: Superglobals :----> "."<br> <br>";
echo'<pre>';
print_r($GLOBALS);  // this will gives all the gloabal variable present in the code.
?>

