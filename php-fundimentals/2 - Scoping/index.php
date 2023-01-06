<?php

$x = "Hello";

// This is a function
// This function will return an error as the variable $x is not in scope
// comment out once you have seen the error
function Test() {
    echo $x;
}

// This will work as the variable is in scope
function Test2() {
    $y = "Foo";
    echo $y;
}

// you can force a variable to be in scope by using the global keyword
// however this isn't recommended as it can cause issues
function Test3() {
    global $x;
    echo $x;
}
