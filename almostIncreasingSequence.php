<?php
function almostIncreasingSequence($sequence) {
    $am = 0;
    for($i = 0; $i < count($sequence)-1; $i++) {
        if($sequence[$i] >= $sequence[$i+1]) {
            if(count($sequence) > $i+2 &&
                $sequence[$i] >= $sequence[$i+2] &&
                $sequence[$i-1] >= $sequence[$i+1]) {
                return false;
            }
            else
                $am++;
        }
        if($am > 1)
            return false;
    }

    return true;
}
