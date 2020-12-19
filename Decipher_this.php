function decipherThis($str){
  $string ="";
  $arr = explode(" ",$str);
  for($i = 0; $i < count($arr); $i++){
    $fir = "";
    $w = str_split($arr[$i]);
    for($j=0; $j<count($w); $j++)
    {
       if (is_numeric($w[$j])){
         $fir .= $w[$j];
       } 
    }
    echo $fir." ";
    //$fr = (int)$fir;
    $s = chr($fir);
    echo $s." ";
    $st = implode("", $w);
    $str = str_replace($fir, $s, $st);
    if($i != (count($arr) - 1)){
      $string.=$str." ";
    } else {
      $string.=$str;
    }
  }
  $arr2 = explode(" ", $string);
  for($k = 0; $k < count($arr2); $k++){
    $sec = str_split($arr2[$k]); 
    $f = $sec[1];
    $sec[1] = $sec[count($sec) - 1];
    $sec[count($sec) - 1] = $f;
    $arr2[$k] = implode("", $sec);
  }
  $string = implode(" ", $arr2);
  return $string;
}
