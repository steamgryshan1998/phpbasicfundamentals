<?php
/**
 * Function that checks if the string has the same amount of 'x's and 'o's
 * (task from www.codewars.com)
 */
function XO($s) {
    $x = $o = 0;//assign the initial value to the variables
    $ar = str_split($s);//converts a string to an array
    for($i = 0; $i < count($ar); $i++)
    {
        switch($ar[$i]) {//checking the current element of the array
            case "x":
                $x++;
                break;
            case "o":
                $o++;
                break;
            case "X":
                $x++;
                break;
            case "O":
                $o++;
                break;
            default:
                break;
        }
    }
    if ($x == $o){// checking equality between x and o
        return true;
    } else {
        return false;
    }
}
