<?php 
$a = 5;
function Factorial(int $a): int {
    if($a>1) return $a*factorial($a-1);
    else return 1;
}

echo Factorial($a);