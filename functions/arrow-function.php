<?php
// Anonymous function
$add = function ($a, $b) {
    return $a + $b;
};

// Arrow function
$addArrow = fn($a, $b) => $a + $b;

echo $add(2, 3);        // Output: 5
echo $addArrow(2, 3);   // Output: 5

// This only works in PHP 7.4 and above
// $str = "Hello World";
// $my_function = fn($a) => $str . $a;
// echo $my_function("!");


// $factor = 10;

// // Closure
// $multiplier = function ($n) use ($factor) {
//     return $n * $factor;
// };

// // Arrow function
// $multiplierArrow = fn($n) => $n * $factor;

// echo $multiplier(5);        // Output: 50
// echo $multiplierArrow(5);   // Output: 50