<?php

// super globals are PHP variables that are always available in all scopes
// ther are very specific and achieve specific roles

// $_SERVER
// this is an array that contains information about the server and the environment

// $_GET
// this is an array that contains information about the query string

// $_POST
// this is an array that contains information about the post data

// $_FILES
// this is an array that contains information about the files that have been uploaded

// $_COOKIE
// this is an array that contains information about the cookies that have been set
// set a cookie
setcookie("name", "value", time() + 3600, "/");


// $_SESSION
// this is an array that contains information about the session

// start session
session_start();

// set session variable
$_SESSION["name"] = "value";


// $_REQUEST
// this is an array that contains information about the request

// $_ENV
// this is an array that contains information about the environment

// lets try looking at these variables in action with the debug code below

echo "<pre>";
var_dump($variable);
echo "</pre>";