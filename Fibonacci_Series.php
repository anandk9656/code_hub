<?php
// Fibonacci Series
$num = 10; // Define the no of elements in the series.
$first = 0; // First Element of the series.
$second = 1; // Second Element of the series.
echo $first." ".$second." ";
for($i=0;$i<$num-2;$i++){
    $third = $first+$second;
    echo $third." ";
    $first = $second;
    $second = $third;
}
