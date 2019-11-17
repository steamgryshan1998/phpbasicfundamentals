<?php
function commonCharacterCount($s1, $s2) {
    str_split($s1);
    str_split($s2);
    $count = 0;
    for($i = 0; $i < strlen($s1); $i++)
    {
        for($j = 0; $j < strlen($s2); $j++)
        {
            if($s1[$i] == $s2[$j])
            {
                $count++;
                $s2[$j] = 0;
                break;
            }
        }
    }
    return $count;
}
?>