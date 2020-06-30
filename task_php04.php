<?php
//////////////////////////////////////
//Task 1
function double($num){
    $sum = 0;
    $sum  = $num * $num;
    return $sum;  
}
/*
echo double(2);
echo "\n";
*/
//////////////////////////////////////
//Task 2
function f($a,$b){
    $sum = 0;
    $sum = $a + $b;
    return $sum;
}
/*
echo f(2,9);
echo "\n";
*/
//////////////////////////////////////
//Task 3
$arr = array(1,3,5,7,9);

function sum_multiplication($arr){
    $sum = 1;
    foreach($arr as $arr){
         $sum = $sum * $arr;
    }
    return $sum;
}

echo sum_multiplication($arr);
echo "\n";
//////////////////////////////////////
//Task 4
function max_array($arr){
    $ans = 0;
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}

echo "\n";
echo max_array($arr);
echo "\n";

//echo time();
//echo mktime(date('H'),date('i'),date('s'),date('n'),date('j'),date('Y'))."<br/>\n";
//////////////////////////////////////

?>

