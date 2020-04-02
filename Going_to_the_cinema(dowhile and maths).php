<?php
/**
 *  Function that which calculates the number of sessions in the cinema to show that the card is more profitable
 * (task from www.codewars.com)
 */
function movie($card, $ticket, $perc) {
    $f = 0;
    do{//cycle do...while() - action before condition
        $f++;
        $s1 = $ticket * $f;//system without card
        $card += $ticket * pow($perc, $f);//system with card;  pow(basement ,exponent) - exponentiation
    } while(ceil($card) >= $s1);//ceil() - rounds a fraction up
    return $f;
}
