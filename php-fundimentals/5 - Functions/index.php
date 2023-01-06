<?php

// there are two types of functions
// built in functions
// user defined functions
// we have already touched upon built in functions
// below is an example of a built in function
function Test() {
    echo "Hello";
}

// this is user defined and can do almost anything

Test();

echo "<br/>";

// below is an example of built in functions
// you can find a list of built in functions here: https://www.php.net/manual/en/funcref.php

str_word_count("Hello world");

echo "<br/>";

strrev("Hello world");

echo "<br/>";

strpos("Hello world", "world");

// debugging functions, very useful

var_dump("Hello world");

echo "<br/>";

die('test');