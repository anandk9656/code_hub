<?php
$arr = array(10,4,56,3,87,1,5,78,9);
$len = count($arr); // Gives the no of element present in array.
print_r($arr);
// Sorting : Ascending
for($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len;$j++){
        if($arr[$i]>$arr[$j]){
            $temp = $arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$temp;
        }
    }
}
print_r($arr);
