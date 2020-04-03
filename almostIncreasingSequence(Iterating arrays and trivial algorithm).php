<?php
/*
 *Function that determines whether it is possible to obtain a strictly increasing sequence by removing no more than one
 *element from the array.
 *(task from app.codesignal.com)
 */
function almostIncreasingSequence($sequence) {
    $am = 0;//set the initial value of amount elements that need to remove
    for($i = 0; $i < count($sequence)-1; $i++) {
        if($sequence[$i] >= $sequence[$i+1]) {//compare the current element of array with the next
            if(count($sequence) > $i+2 &&            //if length of array bigger than increased by 2 counter and
                $sequence[$i] >= $sequence[$i+2] &&  //current element bigger or equal than going through one element
                $sequence[$i-1] >= $sequence[$i+1]) {//and if previous element bigger or equal than next element
                return false;                        //then its impossible
            }
            else
                $am++;
        }
        if($am > 1)
            return false;
    }
    return true;//if all verifications are passed then possible
}
