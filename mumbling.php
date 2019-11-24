<?php
function accum($s) {
    str_split($s);
    $exit = "";
    for($i = 0; $i < strlen($s); $i++)
    {
        $word = "";
        for($j = 0; $j <= $i; $j++)
        {
            $word .= $s[$i];
        }
        $word = strtolower($word);
        $word = ucfirst($word);
        $exit .= $word;
        if($i < (strlen($s) - 1))
        {
            $exit.="-";
        }
    }
    return $exit;
}
