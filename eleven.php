<?php
    echo "<h1><----: Conditional :- if, if-else, nested if-else and switch :----> </h1>";
    
   echo " <h4>1. if Program Flow </h4>";
    $money =500;
    if($money>=500)
    {
        echo "You have $money , ";
        echo"Eligible for opening the account"."<br>";
    }
    
    echo " <h4>2. if-else Program Flow </h4>";
    $age=16;
    if($age>=18)
    {
       echo"As your age is $age, You are ";
       echo"Eligible for voting";
    }
 else {
        echo"Your are not eligible for voting due to less age ($age)."."<br>";
      }
      
    echo " <h4>3. Nested if-else Program Flow </h4>";
    $a=0;
    if($a>1000)
    {
        echo $num=$a+250;
    }
    elseif ($a>2000) 
        {
            echo $num=$a-500;
        }
    elseif ($a>4000) 
        {
            echo $num=$a-1000;
        }
    elseif($a>5000)
        {
            echo $num=$a-2000;
        }
    else
    {
        echo"You are failed !!!"."<br>";
    }
    
    echo "<h4>4. Switch Program Flow </h4>";
    $n=4;
    switch($n)
    {
        case 1: echo "Monday";
            break;
        case 2: echo "Tuesday";
            break;
        case 3: echo "Wednesday";
            break;
        case 4 : echo "Thursday";
            break;
        case 5 : echo "Friday";
            break;
        case 6 : echo "Saturday";
            break;
        case 7 : echo "Sunday";
           break;
        default : echo "Invalid choice !!!"."<br> <br> ";
    }
    
    echo "<h4>5. Switch Program Flow Alternative without braces of switch block </h4>"; 
    $number=0;
    switch($number):
         case 1: echo "Monday";
            break;
        case 2: echo "Tuesday";
            break;
        case 3: echo "Wednesday";
            break;
        case 4 : echo "Thursday";
            break;
        case 5 : echo "Friday";
            break;
        case 6 : echo "Saturday";
            break;
        case 7 : echo "Sunday";
           break;
        default : echo "Invalid choice !!!"."<br> <br> ";
    endswitch;
