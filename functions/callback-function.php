<?php
function my_callback($item)
{
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);

// Starting with version 7, PHP can pass anonymous functions as callback functions:
// $strings = ["apple", "orange", "banana", "coconut"];
// $lengths = array_map(function ($item) {
//     return strlen($item);
// }, $strings);
// print_r($lengths);
