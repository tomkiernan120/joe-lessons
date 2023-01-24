// Arrow functions

// Arrow functions are a new way to write functions in ES6
// Arrow functions are a shorter way to write functions

const showMessage = () => {
    alert('Hello world');
}

showMessage();

// lets rewrite a function to an arrow function

function ask(question, yes, no) {
  if (confirm(question)) yes();
  else no();
}

ask(
  "Do you agree?",
  function () {
    alert("You agreed.");
  },
  function () {
    alert("You canceled the execution.");
  }
);