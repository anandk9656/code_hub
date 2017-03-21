<?php
    // mutiple string  echo statement 
echo" <h3> <----: Mutiple string echo statements :--->  <br> <br> </h3> ";

$multiple="Martin CEO-Founder";
echo" MOODLE : <br>
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE : <br>
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE : <br>
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE : <br> 
    Modular Object Oriented Dynamic Learning Environment. <br><br>
- by $multiple ";

echo"<br> <br>";

// multiple string assignment statement
echo"<h3> <----: Mutiple string assignment statements  :--->  <br> <br></h3>";

$hint="";
        $text="This is anand kumar from vidyamantra Edusystem Pvt Ltd 
              as a php developer.  
$hint";
        echo"$text";
        
echo"<br> <br>";

// multiple echo statement altenative
echo"<h3><----: Mutiple echo statements alternative :---> <br> <br> </h3>";

$multp=" ";
echo <<<_END
MOODLE : <br>
    Modular Object Oriented Dynamic Learning Environment <br>
$multp
_END;

echo"<br> <br>";

// escpace character
echo" My name is \"ANAND KUMAR\" ";   // quotation on ANAND KUMAR will be shown.

echo"<br> <br>";

echo'India\'s highest populated state is now Delhi.'; //   's is shown as \'s to avoid errorneus syntax.

echo"<br> <br>";

echo"ANAND\tKUMAR\tVIDYAMANTRA\tEDUSYSTEM\tPVT\tLTD";  //    \t  is used for providing 'tab' in the text. 

echo"<br> <br>";


?>

