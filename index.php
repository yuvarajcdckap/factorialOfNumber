<?php
function factorialOfNumber($num){
    $res=$num;
    for ($i=$num-1; $i >=1 ; $i--) { 
      $val=$res*$i;
      $res=$val;

    }
    echo $res;
}
factorialOfNumber(6);
?>      
