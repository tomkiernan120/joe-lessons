// The below is going to show how javascript handles variable scope

// global scope
var  test1 = 'Hello world';

// this is the same as window.test1 = 'Hello world';

// function scope
// variables declared inside a function are only available inside that function
function  test2() {
    var  test2 = 'Hello world';
}

// block scope
// variables declared inside a block are only available inside that block
if  (true) {
        var  test3 = 'Hello world';
    }

// the below will not work because test3 is not available outside the if block
console.log(test3);

// hoisting
// variables declared with var are hoisted to the top of the function
// this means that you can use a variable before it is declared
// this is not recommended
console.log(test4);
var  test4 = 'Hello world';

// the below will not work because test5 is not available yet and declared with let
console.log(test5);
let  test5 = 'Hello world';

// the below will not work because test6 is not available yet and declared with const
console.log(test6);
const  test6 = 'Hello world';

// this is why let and const are recommended over var
// it may seem useful to just use hoisting but it makes for very complicated code
