<?php
function sumDigits($number) {
    $sum = 0;
    $number = abs($number); 
    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }
    
    return $sum;
}

?>