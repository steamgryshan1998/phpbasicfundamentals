<?php
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
?>