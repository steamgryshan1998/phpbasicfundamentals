<?php
/**
 * Function that repeats the string a certain number of times
 * (task from www.codewars.com)
 */
function solution($s, $n) {
    $str = "";//defining a string
    for($i = 0; $i < $n; $i++){
        $str .= $s;//adding the character to the string
    }
    return $str;
}