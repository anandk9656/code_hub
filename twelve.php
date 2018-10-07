<?php
include 'head.html';
    echo "<h1>Looping in php</h1>";
    
echo "<h3> 1. while loop </h3> "; // In this loop, first the condition will be checked, if true, then the following loop statements will be executed.
    $i=1;
    while($i<=10)
    {
         echo $i;
         $i++;
         echo "<br>";
    }
    
echo "<h3> 2. do-while loop  </h3>";// Loop will execute atleast once inspite of being condition failed.
    $n=1;
    do
    {
        echo $n;
        $n++;
        echo "<br>";
    }while($n<=10);
    
echo "<h3> 3. for loop  </h3>";
    for($j=1;$j<10;$j++)
    {
        echo $j;
        echo"<br>";
    }
  echo"<h3> 4. Break statement</h3> ";
  for($j=1;$j<10;$j++)
    {
      if ($j == 4) { // Work for J from 1 to 3.
        break;
    }
    echo $j;
        echo"<br>";
       
    }
  
   echo"<h3> 5. Continue  statement</h3> ";
   for($j=1;$j<7;$j++)
    {
        echo $j;
        echo"<br>";
        if ($j >= 3) {
        continue;
    }
    echo " Out of continue statement "."<br>";
    echo" php programming<br>";
    }
    include 'foot.html';
