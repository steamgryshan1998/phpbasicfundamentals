<?php 

function FindIntersection($strArr) {
  $first = explode(", ", $strArr[0]);
  $second = explode(", ", $strArr[1]);
  $int = array();
  for($i = 0; $i < count($first);$i++){
    for($j = 0; $j < count($second); $j++){
      if($first[$i] == $second[$j]){
        array_push($int, $first[$i]);
      }
    }
  }
  //var_dump($int);
  $in = implode(",", $int);
  echo $in;
  return $strArr;

}
   
// keep this function call here  
FindIntersection(fgets(fopen('php://stdin', 'r')));  

?>
