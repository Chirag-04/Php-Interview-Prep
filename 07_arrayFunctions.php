<?php
echo "hi <br>";
$fruits = ["apple","kiwi","peach"];

// size 
 echo count($fruits);

 // check element 
 // in_array(to_be_search  ,array);
 echo in_array("apple" , $fruits);
 $fruits[] ='grape';
 array_push($fruits , "berry");
 array_push($fruits , "mango");

//  print_r($fruits);

 // remove array
 // shift -> removers first 
 // unshift add to the first 
 array_shift($fruits);
 array_shift($fruits);
 array_shift($fruits);

//  print_r($fruits);

 array_unshift($fruits , "newFruit");
 array_pop($fruits);
//  print_r($fruits);


// concatenate --> merge
// $arr3 =  array_merge($arr1   , $arr2);
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1 , $arr2);
// print_r($arr3);


// Combine arrays (Keys & values)
// combing the arrays of string 

$b = ['avocado', 'apple', 'banana' ,
     'green', 'red', 'yellow'];
// $c = array_combine($a, $b);


$chunkedArray =  array_chunk($b , 2);
// print_r($chunkedArray);


$keys = array_keys($b);
print_r($keys);


// this is a very unique function used to flip key to value 
$flipped= array_flip($b);
// print_r($flipped);


$fliparray =  array_flip($arr1);
// print_r($fliparray);



// range
$rangeNo =  range(1,20);
// print_r($rangeNo);




?>