<?php
// Notes
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$nameof = "Chirag";
$age = 18;
$has_money = false;
$money_left = 1.223;
// echo $money_left ;

// echo "${nameof} has ${money_left} money left only";
 $x =  5 + 5;
 echo $x;
 $y = '5' +  '5'; // in case of js they would return 55
 echo $y;

 // same math operation

 // creating constant 
 define('HOST' , 'localhost');
 define('database' , "chirag's database");
 echo database;
 ?>