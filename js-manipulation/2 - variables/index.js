// older way of declaring variables
// still works but not recommended
var  test1 = 'Hello world';

// new way of declaring variables
// recommended
let  test2 = 'Hello world'; // let is used for variables that will change

const test3 = 'Hello world'; // const is used for variables that will not change

// if you try to change a const variable you will get an error
test3 = 'Hello world 2';

// you can also set many variables at once
let  test4 = 'Hello world',
    test5 = 'Hello world 2',
    test6 = 'Hello world 3';