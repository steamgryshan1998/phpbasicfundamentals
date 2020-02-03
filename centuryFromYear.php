<?php
/*
 * Function that returns a century depending of the year
 * (task from app.codesignal.com)
 */
function centuryFromYear($year) {
/*   if($year / 1000 <= 0.1)
{
$century = 1;
}   else
{
if($year % 100 == 0)  // symbol '%' means reminder of division
{
$century = $year / 100;
} else {
$century = ($year / 100) - (($year % 100)/100) + 1;
}
} */
return $century = ceil($year / 100);   //ceil - rounds a fraction upward
}
