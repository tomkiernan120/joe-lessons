<?php

// concat world

$x = "Hello";

// same functionality
// $x = $x . " World";
$x .= " World";

// addition operator 
$x = 1 + 1;

// subtraction operator
$x = 1 - 1;

// multiplication operator
$x = 1 * 1;

// division operator
$x = 1 / 1;

// modulus operator
$x = 1 % 1;

// increment operator
$x = 1;
$x++;

// decrement operator
$x = 1;
$x--;

// comparison operators
// equal
$x = 1 == 1;

// identical
$x = 1 === "1";

// not equal
$x = 1 != 1;

// not identical
$x = 1 !== 1;

// greater than
$x = 1 > 1;

// less than
$x = 1 < 1;

// greater than or equal to
$x = 1 >= 1;

// less than or equal to
$x = 1 <= 1;

// logical operators
// and
if(1 == 1 && 1 == 2) {
    $x = true;
}
else {
    $x = false;
}

$x = 1 == 1 && 1 == 2

// or
$x = 1 == 1 || 1 == 1;

// not
$x = !1 == 1;

// ternary operator
$x = 1 == 1 ? "Hello" : "World";

if(1 == 1 ) {
    $x = "Hello";
}
else {
    $x = "World";
}

// null coalescing operator
$x = 1 == 1 ?? "Hello";

if(1 == 1) {
    $x = 1;
}
else {
    $x = "Hello";
}

// string operators

// concat
$x = "Hello" . " World";

// concat assignment
$x = "Hello";
$x .= " World";

// concat with variable
$x = "Hello";
$y = "World";
$x .= " " . $y;

// concat with variable assignment
$x = "Hello";
$y = "World";
$x .= " " . $y;

// concat with variable assignment shorthand
$x = "Hello";
$y = "World";
$x .= " $y";


// concat with variable assignment shorthand with curly braces
$x = "Hello";
$y = "World";
$x .= " {$y}";
$x .= ' {$y}'; // this would output as a string '{$y}'

// concat with variable assignment shorthand with curly braces and concat
$x = "Hello";
$y = "World";
$x .= " {$y}!";

// concat with variable assignment shorthand with curly braces and concat and concat assignment
$x = "Hello";
$y = "World";

// same functionality

