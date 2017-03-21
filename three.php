<?php
    // One-dimensional Array
    echo" <h1> <---:  One_Dimensional_Array<br><br> :----> </h1>  ";
    
    $student = array("ANAND","SHUBHAM","RAVI","ARUN","SUMAN",1,2,3,4,5,6,7,8,9,0);
//    echo $student[4]; 
//    echo"<br> <br>";
//    $student[5]=123;
//    echo $student[2];
//    echo"<br> <br>";
    echo'<pre>';
//    print_r($student); // it will print whole array value with their subscript.
   echo $count = count($student)."<br>";
   
    for($i=$count-1;$i>=$count-10;$i--)
    {
        echo $student[$i]."<br>";
    }
?>

