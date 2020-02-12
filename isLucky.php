<?php
/*
 * function that determines if ticket lucky or not.
 * (task from app.codesignal.com)
*/
function isLucky($n) {
    $num = strval($n);
    str_split($num);
    $s1 = $s2 = 0;
    for($i = 0; $i < strlen($num);$i++)
    {
        if ($i > (strlen($num)/2) - 1)
        {
            $s2+=$num[$i];
        }   else  {
            $s1+=$num[$i];
        }
    }
    if($s1 == $s2)
    {
        return true;
    }  else  {
        return false;
    }
}

