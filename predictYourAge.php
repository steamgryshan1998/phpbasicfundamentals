<?php
/*
 * function that predicts your age!
 * (task from www.codewars.com)
*/
function predictAge($age1,$age2,$age3,$age4,$age5,$age6,$age7,$age8){
    $age = $age1*$age1 + $age2*$age2 + $age3*$age3 + $age4*$age4 + $age5*$age5
        + $age7*$age7 + $age6*$age6 + $age8*$age8;
    $age = sqrt($age);
    $age /= 2;
    $age = floor($age);
    return $age;
}