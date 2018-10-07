<?php
    // mutiple string  echo statement 
echo" <h3> <----: Mutiple string echo statements :--->  </h3> ";

$multiple="Martin CEO-Founder";
echo" MOODLE :
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE :
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE :
    Modular Object Oriented Dynamic Learning Environment. <br>
    MOODLE : 
    Modular Object Oriented Dynamic Learning Environment. <br>
- by $multiple ";

echo"<br>";

// multiple string assignment statement
echo"<h3> <----: Mutiple string assignment statements  :---> </h3>";

$hint="";
        $text="This is anand kumar from vidyamantra Edusystem Pvt Ltd 
              as a php developer.  
$hint";
        echo"$text";
        
echo"<br> <br>";

// multiple echo statement altenative
echo"<h3><----: Mutiple echo statements alternative :---> </h3>";
echo <<<_END
MOODLE :  Modular Object Oriented Dynamic Learning Environment <br>
_END;

echo"<br> <br>";
// escpace character
echo" My name is \"ANAND KUMAR\" ";   // quotation on ANAND KUMAR will be shown.
echo"<br>";
echo'India\'s highest populated state is now Delhi.'; //   's is shown as \'s to avoid errorneus syntax.
echo"<br>";
echo"ANAND\tKUMAR\tVIDYAMANTRA\tEDUSYSTEM\tPVT\tLTD";  //    \t  is used for providing 'tab' in the text. 
