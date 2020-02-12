<?php
/*
 * function that find the area of a polygon for a given n.
 * (task from app.codesignal.com)
*/
function shapeArea($n) {
    $sh = ($n*$n)+(($n-1)*($n-1));
    return $sh;
}
