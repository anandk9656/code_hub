<?php
    // Two-dimensional Array
     echo" <h1> <----: Two_Dimensional_Array<br><br> :----> </h1> ";
     
     $college = array(
                        array(1,"Anand","Physics"),
                        array(2,"Shubham","Chemistry"),
                        array(3,"Ravi","Mathematics")
                    );
     
     echo $college[1][2];
     
     echo"<br> <br>";
     echo'<pre>';
     print_r($college);
?>
