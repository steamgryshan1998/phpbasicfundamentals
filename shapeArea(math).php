<?php
/*
 * function that find the area of a polygon for a given n.
 * (task from app.codesignal.com)
*/
function shapeArea($n) {
    $sh = ($n*$n)+(($n-1)*($n-1));//the area of the square is equal to the sum of the square of "n" and the square of
    // the "n" reduced by 1
    return $sh;
}
