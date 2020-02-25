<?php
/**
 * Function that collates the ending of the string
 * (task from www.codewars.com)
 */
function solution($str, $ending) {
    $ar1 = str_split($str);//Converts a string to an array
    $ar2 = str_split($ending);
    if($ending == NULL){//if second string is empty
        return true;
    }
    $s = "";//initializing the common string
    for($j = count($ar1) - count($ar2); $j < count($ar1); $j++){
        $s .= $ar1[$j];
    }
    $ar3 = str_split($s);
    for($k = 0; $k < count($ar2); $k++){
        if($ar2[$k] != $ar3[$k])// checking the difference between strings
            return false;
        }
    }
    return true;
}