<?php
function duplicateCount($text) {
    $text = mb_strtolower($text);
    $m = 0;
    foreach(count_chars($text, 1) as $i => $val)
    {
        if ($val > 1)
        {
            $m++;
        }
    }
    return $m;
}
?>