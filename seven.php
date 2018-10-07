<?php
namespace test;
   // constant and predefined constants
echo" <h3> <----: Constant  :----> </h3>";
define("fix",12321,true); // it is case-insensitive constant by adding a new parameter to the define function as true.
echo fiX; 
echo"<br> <br>";
define("cons","ANAND");  // define function is used for defining constant.
echo cons;
echo "<br>";
// echo cOns; // not work because it is case sensitive constant and it is by default false.
 
echo"<h3> <---: Pre-Defined Constants :----> </h3>";

echo"FILE (Gives the file path) :  ";
echo __FILE__;

echo"<br> <br>";

echo"LINE (Gives the line no of the file ) :  " ;
echo __LINE__;

echo"<br> <br>";

echo"DIR (Gives the directory path) :  ";
echo __DIR__;

echo"<br> <br>";

echo"NAMESPACE (Gives the name of namespace used)  :  ";
echo __NAMESPACE__;

echo"<br> <br>";

$prnt="";
echo"__FUNCTION__ :- Gives the function name <br> <br>  
    __CLASS__ :- Gives the class name <br> <br> 
    __METHOD__:- GIves the method name <br> <br> 
 $prnt";
