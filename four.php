<?php
    // Two-dimensional Array
     echo" <h1> <----: Two_Dimensional_Array :----> </h1> ";
     
     $college = array(
                        array(1,"Anand","Physics"),
                        array(2,"Shubham","Chemistry"),
                        array(3,"Ravi","Mathematics")
                    );
     
     echo "SecondRow__ThirdData : ".$college[1][2]; // Indexing starts from 0 (not1).
     
     echo"<br>";
     echo'<pre>';
     print_r($college);
     echo'</pre><br>';
     $student = array(
         array(
             "No"=>'B',
             array(
                 "id"=>"000",
                 "Name"=>"KV AFS",
                 "Code"=>122
                  )
         ),
         array(
             "No"=>'A',
             array(
                  "id"=>"001",
                 "Name"=>"KV AFS",
                 "Code"=>122
             )
         ),
         array(
             "No"=>'C',
             array(
                  "id"=>"002",
                 "Name"=>"KGK AFS",
                 "Code"=>124352
             )
         ),
         array(
             "No"=>'D',
             array(
                  "id"=>"003",
                 "Name"=>"JKAjk",
                 "Code"=>16722
             )
         )
     );
     echo'<pre>';
    // print_r($student);
     echo'</pre><br>';
     echo $student[1][0]['id'];
