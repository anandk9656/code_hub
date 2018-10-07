<?php
    include 'head.html';
    echo"<h1>Arrays in php</h1>";
        echo"<h1> <---: Single dimension Array :---> </h1>";
    echo'<pre>';
    echo "<h2> Numerically indexed array  </h2>";   // In this array we uses number in the indexes of array or leave blank, php will automatically assigned indexes to the values.
    
    $arr[]=12;
    $arr[]="Anand";
    $arr[]=34;
    $arr[]="Shubham";
    $arr[]=56;
    print_r($arr);
    echo"<br>";
                                    // manually assigning index to the array in number.
    $ar[0]=12;
    $ar[1]="Anand";
    $ar[2]=34;
    $ar[3]="Shubham";
    $ar[4]=56;
   for($i=0;$i<5;$i++)
   {
       echo"arr[$i] : "."$ar[$i]"; 
       echo"<br>";
   }
    
    echo "<h2> Associative array  </h2>";       // Reference the items in an array by name rather than by number.
                                               // Each item now has a unique name that you can use to reference.
    $student['name']="Anand_Kumar";                                                                              // name, emp_id, company, address are called as indexes or keys.
    $student['emp_id']="0035";                                                                                  // item assigned to these keys are called as values. example :- Anand_Kumar, 0035, Greater Noida UP etc.
    $student['company']="Vidyamantra Edusystem Pvt Ltd";
    $student['address']="Greater Noida, UP";
    
    echo $student['name'];  // using the index name for printing the desired value.
    echo"<br> <br>";
    echo$student['company'];
    
    echo "<h2> Assignment Using the \"array\" Keyword </h2>" ;
    $p1=array(33,54,65,87,90);
    print_r($p1);
    echo"<br>";
    echo"Second element of p1 array :  ". $p1[1];  // this will print the second element of the p1 array.
    echo "<br> <br>";
    
    $p2=array(
               'alphabet'=>"A B C .....",
                'number'=> 1234567890 ,
                'roman'=> "I II III IV V ...",
                'special'=> "@, #, $, %,&, *, !, ~ ...",
            );
    echo" Printing number : ".$p2['number'];     // print the value of number index defined in p2 array.
    echo"<br>";
    echo" Printing roman  : ".$p2['roman'];    // print the value of roman index defined in p2 array.
    
    echo $p1[9];     // gives error of undefined offset because no element is present at 9 location.
    echo $p2['ball'];   // gives error of undefined index because no defination of index 'ball';
    echo "<h2>  foreach..as loop for array  </h2>";
    
    $a=array(13,42,53,84,95,26);
    $i=0;
    foreach ($a as $b)
    {
        echo "$i : ".$b;
        echo "<br>";
        $i++;
    }
    
    echo"<br> <br>";
    $c=array(
                'coffee'=>"Cafe coffee day",
                'tea'=> "Tata Premium, Brooke",
                'icecream'=>"Strawberry, vanilla, scotch",
            );
    foreach ($c as $d=>$e)
    {
        echo "$d: $e";
        echo"<br>";
    }
   
    echo "<h2> Printing asso. array with while loop using list and each function  </h2>";
    
  $paper = array
      (              'copier'=>"Copier & Multipurpose",
                    'inkjet'=>"Inkjet Printer",
                    'laser'=>"Laser Printer",
                    'photo'=>"Photographic Paper",
      );
while (list($key, $value) = each($paper))
{
        echo "$key: $value<br>";
}

echo"<h2> list function  </h2> ";

list($a,$b,$c,$d)=array("mango","apple","grapes","banana");
echo "a is : $a "."<br>";
echo "b is : $b "."<br>";
echo "c is : $c "."<br>";
echo "d is : $d "."<br>";

echo"<h1> <---: Multidimensional Asso. Array :---> </h1>";

$multi =array(
                  'company'=>   array(
                                    'domain'=>"Software Development",
                                     'platform'=>"Moodle",
                                     'profile'=> "php & JS  developer"
                                     ),
                                
                 'employee'=>  array(
                                        'emp_id'=>"0023-0037",
                                        'emp_name'=>"Anand_kumar",
                                        'emp_salary'=>"50000/M"
                                    ),
                 'insurance'=> array(
                                        'name'=> "Religare",
                                        'policy_no'=>23424,
                                    ),
             );
             foreach ($multi as $head => $item) {
                 foreach ($item as $key => $value) {
        echo "$head: $key - $value <br>";
    }
}
echo "<br>";
echo $multi ['company']['platform'];  // printing a particular element.
echo '<pre>';
print_r($multi);
echo "Print the no of element in multi array : ".count($multi,1);  // count the subarray element if 1 is used with the function.
echo"<h2> Multidimensional Numeric Array </h2>";

$mul=array(
            array(11," "," ",78 ," ",12, " " ,15 ),
            array(" A "," B "," C "," D "),
            array(" ", 1 ," ", 45 ," "),
            array(" anand ", 12," ", 45 ),
         );
foreach($mul as $data)
{
    foreach ($data as $val) {
        echo $val;
    }
    echo"<br>";
}
include 'foot.html';
