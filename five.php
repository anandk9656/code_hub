<?php
        // operators in php

         echo" <h1>  <----: Operators in php programming language :----> <br> <br> </h1>   ";
         echo "Number_1:   ". $num1=20;  // = assigment operator
         echo"<br>";
         echo"Number_2:  ". $num2=4;   // . operator called period is used for joining two strings.
         echo"<br><br>";
         echo"Additon : ". ($num1 + $num2) ;   // addition operator.
         echo"<br> <br>";
         echo"Subtraction : ". ($num1 - $num2) ;   // Subtraction operator.
         echo"<br><br>";
         echo"Multiplication : ". ($num1 * $num2) ;   // Multiplication operator.
         echo"<br><br>";
         echo"Division : ". ($num1 / $num2) ;   // division operator gives quotient.
         echo"<br><br>";
         echo"Modulus : ". ($num1 % $num2) ;   // modulus operator gives remainder.
         echo"<br><br>";
         echo"Increment : ". (++$num1);    // increment operator.
         echo"<br><br>";
         echo"Decrement : ". (--$num2);       // decrement operator.

         $url = "https://mysite.com/test/1234?email=xyz4@test.com&testin=123";

         $query_str = parse_url($url, PHP_URL_QUERY);
         parse_str($query_str, $query_params);
         echo '<pre>';
         print_r($query_params);
         
       