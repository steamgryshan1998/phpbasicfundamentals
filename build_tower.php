function tower_builder(int $n): array {
  $arr = array();
  for($i = 0; $i < $n; $i++){
    $space = str_repeat(" ",($n-($i+1)));
    $star = str_repeat("*",(2*($i+1) - 1));
    $arr[$i] = $space.$star.$space;
  }
  return $arr;
}
