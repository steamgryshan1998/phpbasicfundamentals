<?php
/*
 * Function that calculates the value of Hashtag
 * (task from www.codewars.com)
 */
function generateHashtag($str) {
    //ctype_space() checks for whitespace and returns true if each character in
    //the string creates empty space
    if(ctype_space($str)){
        return false;
    }
    //checking if the string is empty
    if($str == NULL){
        return false;
    }
    //ucwords() - uppercase the first character of each word in a string
    $str = ucwords($str);
    //str_replace() - replaces all occurrences of a search string with a
    //replacement string
    $str = str_replace(" ","",$str);
    //checking the length of the string(> or = 140 characters)
    if(strlen($str) >= 140){
        return false;
    }
    $str = "#".$str;//add "#" to the string
    return $str;
}
