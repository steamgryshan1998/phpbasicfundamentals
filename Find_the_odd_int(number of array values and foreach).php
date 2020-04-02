<?php
/**
 * Function that finds the integer that appears an odd number of times
 * (task from www.codewars.com)
 */
function findIt(array $seq) : int
{
    $ar = array_count_values($seq);//array_count_values() - counts the number of all array values
    foreach($ar as $i => $val)//$ar is an associative array($i - value of element; $val - count of elements)
        if($val % 2 != 0){
            return $i;
        }
    }
}
