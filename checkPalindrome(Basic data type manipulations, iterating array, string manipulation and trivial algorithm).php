<?php
/*
 * Function that checks the string for the palindrome
 * (task from app.codesignal.com)
 */
function checkPalindrome($inputString) {
    $ar = str_split($inputString);//Converts a string to an array
    $s = count($ar);//Counts the number of elements in an array
    for($i = 0; $i < $s; $i++)
    {
        if($ar[$i] != $ar[$s - 1 - $i])// checking the current element of an array with an element with the same number
            // but a mirrored array
        {
            return false;//in case of no palindrome
        }
    }
    return true;// in case of palindrome
}
