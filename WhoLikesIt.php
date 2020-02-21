<?php
/*
 * Function that generates the value of the string
 * (task from www.codewars.com)
 */
function likes( $names ) {
    switch(count($names)){//in dependance of value of amount elements of the array
        case 0:
            $str = 'no one likes this';
            break;//finish iteration
        case 1:
            $str = $names[0].' likes this';//dot helps to add strings
            break;
        case 2:
            $str = $names[0].' and '.$names[1]." like this";
            break;
        case 3:
            $str = $names[0].', '.$names[1].' and '.$names[2]." like this";
            break;
        default:
            $d = count($names) - 2;//amount of others
            $str = $names[0].", ".$names[1]." and ".$d." others like this";
    }
    return $str;
}