<?php
/*
 * function that helps figure out the minimum number of additional statues needed.
 * (task from app.codesignal.com)
*/
function makeArrayConsecutive2($statues) {
    $am = 0;
    sort($statues);//sorts array in ascending order
    for($i = 0; $i < count($statues); $i++)
    {
        if($statues[$i+1] - $statues[$i] > 1)//checking the difference between neighboring statues
        {
            $am= $am + ($statues[$i+1] - $statues[$i] - 1);
        }
    }
    return $am;//return the amount of additional statues needed
}
