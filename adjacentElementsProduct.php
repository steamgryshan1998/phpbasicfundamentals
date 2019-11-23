<?php
/*
 * Function that finds the pair of adjacent elements that has the largest product and returns that product
 *(task from app.codesignal.com)
 */
function adjacentElementsProduct($inputArray) {
    $p = $inputArray[0] * $inputArray[1];//set the product of the first two elements of the array to a variable
    for($i = 1; $i < count($inputArray)-1; $i++)// from second element of the array to the last
    {
        if(($inputArray[$i] * $inputArray[$i+1]) > $p)// compare the value of the next value of the product with the previous
        {
            $p = $inputArray[$i] * $inputArray[$i+1];// if the new value of the product is greater than the previous one,
            //rewrite our variable $p
        }
    }
    return $p;// result of the function
}
