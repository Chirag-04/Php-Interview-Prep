<?php 

  function displayhi(){
    echo "Hi <br>";
  }
  displayhi();

  function add($a , $b){
    return ($a + $b);
  }

  $ans  = add(3 , 4);
  echo "ans is ${ans} <br>";

  // arrow functio
  $multiplyTwo = fn($a , $b) => $a*$b;

  echo $multiplyTwo(5 , 6);

?>