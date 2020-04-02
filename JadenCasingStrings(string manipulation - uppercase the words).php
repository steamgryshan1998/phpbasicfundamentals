<?php
/*
 * function that converts strings to how they would be written by Jaden Smith( he is known for almost always
 * capitalizing every word)
 * (task from www.codewars.com)
*/
function toJadenCase($string)
{
    $str = ucwords($string);//ucwords() uppercase the first character of each word in a string
    //echo $str;
    return $str;
}
