<?php
/*
 * function that converts strings to how they would be written by Jaden Smith( he is known for almost always
 * capitalizing every word)
 * (task from www.codewars.com)
*/
function toJadenCase($string)
{
    $str = ucwords($string);
    echo $str;
    return $str;
}
