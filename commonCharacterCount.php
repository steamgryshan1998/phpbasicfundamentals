<?php
/*
 * Function that finds the number of common characters between two given strings
 */
function commonCharacterCount($s1, $s2) {
    str_split($s1);//converts first given string to an array
    str_split($s2);//converts second given string to an array
    $count = 0;//assignment to a variable(amount of common elements) of the initial value
    for($i = 0; $i < strlen($s1); $i++)//go along the first array
    {
        for($j = 0; $j < strlen($s2); $j++)//go along the second array
        {
            if($s1[$i] == $s2[$j])//comparison elements of arrays (iteration)
            {
                $count++;// increase the number of identical elements
                $s2[$j] = 0;//if elements are equal, equate to zero the element from the second array
                break;//leaving the body of the inner cycle
            }
        }
    }
    return $count;
}
