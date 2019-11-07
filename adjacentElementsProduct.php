<?php
function adjacentElementsProduct($inputArray) {
    $p = $inputArray[0] * $inputArray[1];
    for($i = 1; $i < count($inputArray)-1; $i++)
    {
        if(($inputArray[$i] * $inputArray[$i+1]) > $p)
        {
            $p = $inputArray[$i] * $inputArray[$i+1];
        }
    }
    return $p;
}
?>