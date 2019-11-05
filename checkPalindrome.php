<?php
function checkPalindrome($inputString) {
    $ar = str_split($inputString);//Converts a string to an array
    $s = count($ar);//Counts the number of elements in an array
    for($i = 0; $i < $s; $i++)
    {
        if($ar[$i] != $ar[$s - 1 - $i])
        {
            return false;
        }
    }
    return true;
}
?>