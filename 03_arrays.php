<?php 

// three statement are very useful
// echo for mutiple variables but not for array
// print_r for array
// var_dump more detail
$number =  [1,2,3,4,5];
// print_r($number);
// var_dump($number);

$fruits = [
    'apple',
    'banana',
    'orange'
];

// print_r($fruits);

$colors = [
    1=> 'red',
    2=> 'blue',
    3=> 'pink',
];
//  print_r($colors);

//  print_r($colors[1]);

 
 $salaries = [
    "alex"=> 1000,
    "bob"=> 2000,
    "sia" => 500,
 ];

//  print_r($salaries);
//  print_r($salaries["sia"]);

 $salaries["alex"] = 1200;
//  print_r($salaries);
 

 $all_items = [
    [
        "alex"=> 1000,
        "bob"=> 2000,
        "sia" => 500,
    ],
    [
        "yami"=> 1000,
        "pia"=> 2000,
        "nick" => 500,
    ],
    [
        "james"=> 1000,
        "joe"=> 2000,
        "ben" => 500,
    ],

];
//    print_r($all_items);
//    print_r($all_items[0]);

var_dump(json_encode($all_items));
//string(108) "[{"alex":1000,"bob":2000,"sia":500},{"yami":1000,"pia":2000,"nick":500},{"james":1000,"joe":2000,"ben":500}]"
// json data
?>