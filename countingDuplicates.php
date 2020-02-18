<?php
/*
 * function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur
 * more than once in the input string
 * (task from www.codewars.com)
*/
function duplicateCount($text) {
    $text = mb_strtolower($text);//mb_strtolower - casts a string to lowercase
    $m = 0;
    foreach(count_chars($text, 1) as $i => $val)//iterate over the string
    {
        if ($val > 1)// checking if the character occurs more than once
        {
            $m++;
        }
    }
    return $m;
}
