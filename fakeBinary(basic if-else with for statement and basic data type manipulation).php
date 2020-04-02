<?php
/*
 * Function that replaces any digit below 5 with '0' and any digit 5 and above with '1' and returns the resulting string
 * from '0' and '1'
 * (task from www.codewars.com)
 */
function fake_bin(string $s): string {
    str_split($s);//converts given string to an array
    for($i = 0; $i < strlen($s); $i++)//go along the array
    {
        if($s[$i] >= 5)// checking element comparing with 5
        {
            $s[$i] = 1;//if bigger or equal
        }  else  {
            $s[$i] = 0;// if smaller
        }
    }
    return $s;
}
