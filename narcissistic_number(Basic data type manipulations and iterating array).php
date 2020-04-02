<?php
/**
 * Function that checks if the number is Narcissistic
 * (task from www.codewars.com)
 */
function narcissistic(int $value): bool {
    $v = strval($value);//Converts an integer to a string
    $val = str_split($v);//Converts a string to an array
    $sum = 0;//assign the initial value to the variable
    for($i = 0; $i < count($val); $i++)
    {
        $sum += pow($val[$i],count($val));//increasing the sum; pow() - exponentiation
    }
    /*  if($sum == $value)
      {
        return true;
      }  else  {
        return false;
      }*/
    return ($sum == $value);//cheking the equality between sum and initial number($value)
}
