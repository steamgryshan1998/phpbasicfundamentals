<?php
/**
 * Function that removes the anchors from the URL address
 * (task from www.codewars.com)
 */
function replaceAll($string) {
    if (preg_match("/#/", $string)){//preg_match() - performs regular expression validation
        $str = stristr($string, '#', TRUE);//stristr() - Finds the first occurrence of a substring
        return $str;
    } else {
        return $string;
    }
}