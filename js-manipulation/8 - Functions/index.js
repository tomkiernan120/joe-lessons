// Functions
// Functions are a way to group code together to perform a specific task.

// Functions are declared with the function keyword followed by the name of the function and then a set of parentheses.

// The code to be executed by the function is placed inside curly brackets.

// function name (params1, params2, ... parameterN) {

// }

function showMessage() {
    alert('Hello world');
}

showMessage();
showMessage();

// default variables
// you can set default variables for a function
function showMessage(message = 'Hello world') {
    alert(message);
}

