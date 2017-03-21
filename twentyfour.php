<?php
    include 'head.html';
    echo"<h1> <---: Predefined Array Function :---> </h1>";
    
    echo "<h2> 1. is_array function </h2>";
    
    $name="this is name";
    echo(is_array($name))? "It is an array" : " It is not an array "."<br> <br>";
    $arr=array(12,64,56,67,9,11);
    echo (is_array($arr)) ?"It is an array" : "It is not an array ";
    echo'<pre>';
    print_r($arr);
    echo'</pre>';
    echo"<h2> 2. count function </h2>";
    echo "Array Contains : ".count($arr). " value";
    
    echo"<h2> 3. sort function </h2>";
    echo"Sorting using sort"."<br> <br>";
    sort($arr,SORT_STRING); // when SORT_NUMERIC is used them it treat array as a numeric array. but when SORT_STRING is used then , it treat each array element as a string and compare their bit value. 
    $j=0;
    foreach($arr as $element)
    {
        echo"[ $j ] : $element"."<br>";
        $j++;
    }
    
    rsort($arr);
    echo"<br>"."Reverse sorting using rsort"."<br> <br>";
    $a=0;
    foreach($arr as $element)
    {
        echo"[ $a ] : $element"."<br>";
        $a++;
    }
    
   echo "<h2> 4. shuffle function </h2>"; 
   $ar=array(12,54,10,67,43,21,35);
   echo"Original Array<br><br> ";
   $b=0;
    foreach($ar as $element)
    {
        echo"[ $b ] : $element"."<br>";
        $b++;
    }
    shuffle($ar);
    echo"<br> <br>";
    echo"Shuffled Array <br> <br>";
    $c=0;
     foreach($arr as $element)
    {
        echo"[ $c ] : $element"."<br>";
        $c++;
    }
    
    echo" <h2> 5. explode function </h2>"; // split up a sentence into an array containing all its words.
    echo"explode a string using space delimiter into an array";    
    $text=  explode(' ',"This is anand kumar working in vidyamantra edusystem pvt ltd");    // convert string into array consisiting of words as array elements.
    echo '<pre>';
    print_r($text)."<br> <br>";
    echo'</pre>';
    
    echo"explode a string using *** into an array";
    $text=  explode('***',"This***is***anand***kumar***working***is***vidyamantra***edusystem***pvt***ltd");    // convert string into array consisiting of words as array elements.
    echo '<pre>';
    print_r($text)."<br> <br>";
    echo'</pre>';
    
    echo"<h2> 6. extract function </h2> ";
    extract($ar);  //this is used when accessing data from form , it is useful in getting data from associated array _GET and _POST when used.
    print_r($ar); // extract(__GET) :- used when data is taken form user via get method. For post method use, extract(__POST).
  
    echo "<h2> 7. compact function </h2>";    // to create an array from variables and their values.
    $one="Computer";
    $two="Science";
    $three="Engineering";
    $combine=  compact('one','two','three');
    echo'<pre>';
    print_r($combine);
    echo"<br>";
    $aa=12;
    $bb="XYZ";
    $cc=45;
    print_r(compact(explode(' ','aa bb cc' )));  // using explode in compact 
    
    echo"<h2> 8. reset and end function </h2>";    
    $money=array(1,2,5,10,20,50,100,500,1000,2000);
    foreach($money as $data)
    echo $data."<br>";
    echo"<br>";
    echo"Reset function :  ";
    echo reset($money);     // reset gives moves the array pointer to the first and also return value at first index. Used when we use foreach..as loop.
    echo"<br>";
    echo"end function :  ";
    echo end($money);    // end function will gives the last index and also value at last index.
    include 'foot.html';
 ?>
