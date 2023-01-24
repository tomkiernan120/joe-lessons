// Querying the DOM

// firstly was is the DOM?
// DOM stands for Document Object Model

// the DOM is a tree structure that represents the HTML document

// javascript has access to the current document via the document object
console.log(document);

// the document object has a property called body
// this property is a reference to the body element
console.log(document.body);

// the document object has a property called head
// this property is a reference to the head element
console.log(document.head);

// the document object has a property called title
// this property is a reference to the title element
console.log(document.title);

// we can do our first DOM manipulation with these objecs

// we can change the title of the page
// document.title = 'DOM Querying';

// we can change the text of the body
// document.body.innerText = 'DOM Querying';

// we can change the html of the body
// document.body.innerHTML = '<h1>DOM Querying</h1>';

// we can change the text of the head
// document.head.innerText = 'DOM Querying';

// we can change the background color of the body
// document.body.style.backgroundColor = 'red';

// querying the DOM

// we can query the DOM using the document object
// we can use the querySelector method to query the DOM
// this method takes a CSS selector as an argument
var id = document.getElementById("test");
// this will return the first element that matches the selector

// we can use the querySelectorAll method to query the DOM
// this method takes a CSS selector as an argument
var containers = document.querySelectorAll(".container");
// this will return all elements that match the selector

// we can see that id contains a reference to the element with the id of test
console.log(id);

// we can use this reference to change the text of the element
id.innerText = "DOM Querying";

// we can also set styles on this element
id.style.backgroundColor = "red";
id.style.width = "100px";
id.style.height = "100px";

// we can see that containers contains a reference to all elements with the class of container
console.log(containers);

// we can use this reference to change styles on all container elements
// because this is a HTML collection we can use a for loop to loop through all elements
// a html collection is similar to an array but does not have all the array methods
for (var i = 0; i < containers.length; i++) {
  containers[i].style.backgroundColor = "red";
  containers[i].style.width = "100px";
  containers[i].style.height = "100px";
}
