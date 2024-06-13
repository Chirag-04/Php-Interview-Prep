<?php 
echo "New concept <br>";

// print 0 to 10;
  for($i = 0 ; $i<=10 ; $i++){
    // echo "Number: ${i} <br>";
  }

  // print 0 to 5
  $j = 0 ;
  while($j <=5 ){
    // echo "Number is ${j} <br>";
    $j++;
  }

  // generally we dont use do while use 
  // it executed atleast once if the conditin is failed 
//   $k = 0;
//  do{
//     echo "No. is $k <br>";
//     $k++;
//  }while($k!=0);
    
$fruits = ["apple" , "banana" ,"peach"];
  foreach($fruits as $x){
    echo "$x <br>";
  }

  // this is imp
  $veges = ["carrot" , "potato" ,"brinjal"];

  for($x = 0 ; $x<count($veges) ; $x++){
    echo "$veges[$x] <br>";
  } 


  $cars = ["benz" , "bmw" , "gwagon"];
  foreach($cars as $index =>$x){
    echo "${index}th car is $x <br>";
  }


?>