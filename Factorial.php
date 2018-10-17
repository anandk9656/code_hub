<?php
// Factorial of the number.
$fact = 1;
$num = 5;
for($i=1;$i<=$num;$i++){
    $fact = $fact * $i;
}
echo "Factorial is : ".$fact;
