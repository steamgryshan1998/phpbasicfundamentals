<?php
function fake_bin(string $s): string {
    str_split($s);
    for($i = 0; $i < strlen($s); $i++)
    {
        if($s[$i] >= 5)
        {
            $s[$i] = 1;
        }  else  {
            $s[$i] = 0;
        }
    }
    return $s;
}
?>