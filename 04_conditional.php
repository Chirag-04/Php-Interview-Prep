<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}

*/
$age = 13;
if($age >=18){
    // echo "Eligible to vote";
}
else {
    // echo "Not eligible to vote";
}

$s = 12;
$t = '12';
// echo ($s==$t); // compares the value 
   // if else if else ==> statement same 

   if(true){
    // echo "Truth";
   }

   $post = ['first name'];
   if(empty($post)){
    echo "Array is empty";
   }
   else {
    // echo $post[0];
   }
   // let do this using ternary operator 
//    echo (empty($post)) ? "Array is empty" : $post[0];


   $cricketer = 'jasprit';

   switch($cricketer){
    case 'Rohit';
    echo "Captain";
    break;

    case 'Virat';
    echo 'King ';
    break;


    case 'Hardik';
    echo 'all rounder';
    break;

    default :
    echo 'Indian player';

   }

   
?>