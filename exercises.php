<?php 
// function replacer($var) {
//    $res = str_replace("dog", "cat", $var); 
//     return $res;
// }

// $a = "I have a dog";

// $string = replacer($a);
// echo $string;

//Return the first 4 characters of a string.
// $a = "Programming"; 

// function firstFour($var) {

//     return substr($var,0,4);
// }

// echo firstFour($a); 

// Return the largest number.
// $a = array(5,6,7); 
// function largest($var) {
//     return max($var); 
// }

// echo largest($a);

// Add VAT to price 

$price = 100; 

function addVAT($var) {
    $newPrice = 1.23 * $var; 
    return $newPrice; 
}

addVAT($price);
