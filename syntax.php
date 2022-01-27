<?php

// Indexed Array 

$cars = array("Volvo", "BMW", "Toyota");

// how to find the length of an array  in PHP

$arrayLenth =  count($cars);

for ($i = 0; $i < $arrayLenth; $i++) {

    echo $cars[$i];
}


// var cars = ["Volvo", "BMW", "Toyota"];
// for(i=0; i<cars.length; i++){
//     console.log( cars[i]);
// }

// Associative Array : they have a defined Key rather than an indexed ( numbers ) key

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "school" => "vanarts");

// echo " my School is " . $age("school");

foreach ($age as $i => $val) {
}

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

// create  a indexed  array for your siblings and print them 

// create  an associative array for siblings and their age and print them