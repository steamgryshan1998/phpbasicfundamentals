<?php
/**
 * Function that generates the name of the band
 * (task from www.codewars.com)
 */
function band_name_generator(string $s): string {
    $ar = str_split($s);//Converts a string to an array
    $c = count($ar);//Counts the number of elements in an array
    if($ar[0] == $ar[$c - 1]){
        for($i = 1; $i < $c; $i++){//adding the same string except the first character
            $s.=$ar[$i];
        }
        $s = ucwords($s);//making the first letter high
    }  else  {
        $s = ucwords($s);
        $s = "The ".$s;
    }
    return $s;
}
