<?php
/*
 *Function that returns another array containing all of its longest strings
 *(task from app.codesignal.com)
 */
function allLongestStrings($inputArray) {
    $max = strlen($inputArray[0]);
    for($i = 0; $i < count($inputArray); $i++)
    {
        if (strlen($inputArray[$i]) > $max)
        {
            $max = strlen($inputArray[$i]);
        }
    }
    echo $max;
    for($i = 0; $i < count($inputArray); $i++)
    {
        if(strlen($inputArray[$i]) == $max)
        {
            $arr[]=$inputArray[$i];
        }
    }
    return $arr;
}
