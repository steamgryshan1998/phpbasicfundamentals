<?php
/*
 *Function that returns the array containing all of its longest strings
 *(task from app.codesignal.com)
 */
function allLongestStrings($inputArray) {
    $max = strlen($inputArray[0]);//set $inputArray[0] as a longest string by default
    for($i = 0; $i < count($inputArray); $i++)
    {
        if (strlen($inputArray[$i]) > $max)//compare the current element if array with biggest string
        {
            $max = strlen($inputArray[$i]);// set new value of max if condition is met
        }
    }
    for($i = 0; $i < count($inputArray); $i++)
    {
        if(strlen($inputArray[$i]) == $max)
        {
            $arr[]=$inputArray[$i];//create and rewrite new array that contains all longest strings of given array
        }
    }
    return $arr;//return the array containing all longest strings of first given array
}
