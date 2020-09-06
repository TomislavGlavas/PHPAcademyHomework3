<?php 
$string = 'random string';

function Reverse(string $a): string {
    $arr = str_split($a);
    $i = count($arr)-1;
    $j = 0;
    $arr2 = $arr;
    while($i>=0){ 
        $arr2[$j] = $arr[$i];
        $i--;
        $j++;
    }
    $str = implode($arr2);
    return $str; 
    
    }

echo Reverse($string);