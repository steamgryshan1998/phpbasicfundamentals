function movingShift($s, $shift) {
//    $num = array(1,2,3,4,5,6,7,8,9,0);
//    echo in_array(($a[13]),$num);
    $a = str_split($s);
    for($i = 0; $i < count($a); $i++){
        for($j = 0; $j < $i+$shift;$j++){
          if(is_numeric($a[$i]) == 0){
            $a[$i]++;
          } else {
            $a[$i] = $a[$i];
          }
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
    $arr1 = array_chunk($a, $size);
    for ($it = 0; $it<count($arr1); $it++){
      $sss = implode("", $arr1[$it]);
      $arr[$it] = $sss;
    }
    if((strlen($s) % $size == 0) && (count($arr) < 5)){
      array_push($arr, "");
    }
    //var_dump($arr);
    return $arr;
}
function demovingShift($arr, $shift) {
      var_dump($arr);
      echo " ".$shift;
      $ss = implode("", $arr);
      $a = str_split($ss);
      $alp = 26;
      echo $a[25];
      echo count($a);
      for($i = 0; $i < count($a); $i++){
        $fl = $alp - $shift;
        if ($fl < 0) {
          $fl*=(-1);
          $fl = 26 - $fl;
        }
        echo $fl." ";
        for($j = 0; $j < $fl;$j++) {
          $a[$i]++;
        }
        $alp--;
        if($alp == 0){
          $alp = 26;
        }
        if(strlen($a[$i]) == 2){
          $a[$i] = substr($a[$i], 1);
        }
      }
    //var_dump($a);
    $s1 = implode("", $a);
    return $s1;
}
