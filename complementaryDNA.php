<?php
/*
 * Function that calculates the value of DNA
 */
function DNA_strand($dna) {
    str_split($dna);//converting strong to an array
    for($i = 0; $i < strlen($dna); $i++){//going along the array
        switch($dna[$i])//selecting a specific value depending on the character of the variable
        {
            case 'A':
                $dna[$i] = 'T';
                break;
            case 'T':
                $dna[$i] = 'A';
                break;
            case 'C':
                $dna[$i] = 'G';
                break;
            case 'G':
                $dna[$i] = 'C';
                break;
        }
        /*if ($dna[$i] == 'T')
        {
          $dna[$i] = 'A';
        }  elseif ($dna[$i] == 'A'){
          $dna[$i] = 'T';
        } elseif ($dna[$i] == 'C') {
          $dna[$i] = 'G';
        } elseif ($dna[$i] == 'G') {
          $dna[$i] = 'C';
        }*/
    }
    return $dna;
}
