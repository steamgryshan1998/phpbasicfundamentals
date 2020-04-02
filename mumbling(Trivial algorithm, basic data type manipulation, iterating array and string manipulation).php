<?php
/*
 * Mumbling
 * (task from www.codewars.com)
*/
function accum($s) {
    str_split($s);//converts a string to an array
    $exit = "";//assign the initial value to the string
    for($i = 0; $i < strlen($s); $i++)//go along the array
    {
        $word = "";
        for($j = 0; $j <= $i; $j++)
        {
            $word .= $s[$i];//add the current element of the array to the string
        }
        $word = strtolower($word);//strtolower() converts a string to lowercase
        $word = ucfirst($word);//ucfirst() converts the first character of a string to uppercase
        $exit .= $word;
        if($i < (strlen($s) - 1))
        {
            $exit.="-";//adding the hyphen
        }
    }
    return $exit;
}
