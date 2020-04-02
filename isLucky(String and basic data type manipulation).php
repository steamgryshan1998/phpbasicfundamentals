<?php
/*
 * function that determines if ticket lucky or not.
 * (task from app.codesignal.com)
*/
function isLucky($n) {
    $num = strval($n);//returns the string value of a variable
    $s1 = $s2 = 0;// assignment to a variables of the initial values
    for($i = 0; $i < strlen($num);$i++)//go along the array(number of ticket)
    {
        if ($i > (strlen($num)/2) - 1)//checking that a digit belongs to one of the two halves of the array
        {
            $s2+=$num[$i];//increasing the sum of digits from second half
        }   else  {
            $s1+=$num[$i];//increasing the sum of digits from first half
        }
    }
    if($s1 == $s2)//comparison the halves(lucky ticket)
    {
        return true;// if ticket lucky
    }  else  {
        return false;// if ticket no lucky
    }
}

