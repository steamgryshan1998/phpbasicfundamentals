function movingShift($s, $shift) {
    $a = str_split($s);
    for($i = 0; $i < count($a); $i++){
      for($j = 0; $j <= $i;$j++) {
        $a[$i]++;
      }
      if(strlen($a[$i]) == 2){
        $a[$i] = substr($a[$i], 1);
      }
    }
    //var_dump($a);
    $size = ceil(strlen($s)/5); 

/*  $st = implode("", $a);
    echo $st;
    $arr = explode('', $st, $size);
    var_dump($arr);*/
    $arr = array_chunk($a, $size);
    for ($it = 0; $it<count($arr); $it++){
      $sss = implode("", $arr[$it]);
      $arr[$it] = $sss;
    }
    return $arr;
}
