<?php
$number1=$number2="";
   if(isset($_POST['num1'])) 
   { 
       $number1 = $_POST['num1'];   
   }
 else {
        $number1=0;
      }
      
   if(isset($_POST['num2'])) 
   {    
       $number2 = $_POST['num2'];    
   }
 else {
        $number2=0;
      }
      
   $sum=($number1+$number2); 
  
echo<<<_END
   
<html>
        <head> <title> Program  </title>
            <style>
                h1{ text-align:center; color:brown;}
            </style>
        </head>
   <body>
              <h1> Form handling in php </h1>
      <pre>
        <form method="post" action="twentysix.php">
            Enter Number_1 : <input type="text" name="num1" placeholder="First number"> <br /> <br />
            Enter Number_2 : <input type="text" name="num2" placeholder="Second number"> <br /> <br />
            Result : <input type="text" name="res" value="$sum"> <br /> <br />
                       <input type="submit" value="Add"> 
   
        </form>
     </pre>
   </body>
</html>
_END;
?>

