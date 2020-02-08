<?php
function makeArrayConsecutive2($statues) {
    $am = 0;
    sort($statues);
    for($i = 0; $i < count($statues); $i++)
    {
        if($statues[$i+1] - $statues[$i] > 1)
        {
            $am= $am + ($statues[$i+1] - $statues[$i] - 1);
        }
    }
    return $am;
}
