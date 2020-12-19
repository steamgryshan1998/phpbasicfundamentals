function high($x) {
  $arr = ["1" => "a"];
  $j = 2;
  for($i = 'b'; $i <= 'z'; $i++){
    $arr += ["$j" => "$i"];
    $j++;
  }
  $pieces = explode(" ",$x);
  $max = 0;
  for($k = 0; $k < count($pieces); $k++){
    $ar = str_split($pieces[$k]);
    $sum = 0;
    for($f = 0; $f < count($ar); $f++){
      $sum += array_search($ar[$f], $arr); 
    }
    if($sum > $max){
      $max = $sum;
      $m = implode("",$ar);
      $str = $m;
    }  
  }
  echo $str;
  return $str;
}
