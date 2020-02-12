<?php
/*
 * function that rearranges the people by their heights in a non-descending order without moving the trees.
 * (task from app.codesignal.com)
*/
function sortByHeight($a) {
    for($i = 0; $i < count($a); $i++)
    {
        for($j = $i+1; $j < count($a); $j++)
        {
            if(($a[$i] > $a[$j])&&($a[$j] != (-1)))
            {
                $f = $a[$j];
                $a[$j] = $a[$i];
                $a[$i] = $f;
            }
        }
    }
    return $a;
}
