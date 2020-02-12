<?php
/*
 * function that returns the total sum of all rooms that are suitable for the CodeBots (ie: add up all the values that
 * don't appear below a 0)
 * (task from app.codesignal.com)
*/
function matrixElementsSum($matrix) {
    $sum = 0;
    for($i = 0, $counti = count($matrix); $i < $counti; $i++)
    {
        for($j = 0, $countj = count($matrix[$i]); $j < $countj; $j++)
        {
            if($matrix[$i][$j] == 0)
            {
                for ($n = $i; $n < $counti; $n++)
                {
                    $matrix[$n][$j] = 0;
                    echo $matrix[$n][$j];
                }
            }
            $sum+=$matrix[$i][$j];
        }
    }
    return $sum;
}
