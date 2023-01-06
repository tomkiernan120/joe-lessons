<?php

// you can use echo to print out a string

// below output Hello world
// Wrap strings in quotes to tell PHP that it is a string
// Refresh page once you have made changes



// below here add your name to the variable and
$name = "";

// Below is string interpolation. The curly braces are replaced with the value of the variable
echo "Hello {$name}";

// Below is an example of concatenation. The dot is used to concatenate strings
echo "Hello " . $name;

// Below is an example of a constant. Constants are defined using the define function
// Constants are useful for storing values that will not change
define("PI", 3.14);

// Below is an example of a constant being used
echo PI;