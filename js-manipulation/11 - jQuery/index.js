// Jquery is a library that makes it easier to manipulate the DOM
// we covered previously how to manipulate the DOM using vanilla javascript
// jQuery is falling out of fashion slightly, however it is still used in many projects
// I also think it's useful helper functions are useful to know and can be very helpful when working in wordpress sites as jQuery is included by default

// jQuery is included in the index.html file
// we can use jQuery by using the $ symbol
// this is a reference to the jQuery function

// we can use the jQuery function to select elements
// this is similar to the querySelector method
// this will return the first element that matches the selector
var id = $("#test");

// we can use the jQuery function to select elements
// this is similar to the querySelectorAll method
// this will return all elements that match the selector
var containers = $(".container");

// we can see that id contains a reference to the element with the id of test but now it returns as a jquery object
console.log(id);

// we can use this reference to change the text of the element
id.text("DOM Querying");

// we can also set styles on this element
id.css("background-color", "red");

// the below is the same as the above in vanilla javascript
// var id = document.querySelector("#test");
// id.style.backgroundColor = "red";

// we can see that containers contains a reference to all elements with the class of container but now it returns as a jquery object
console.log(containers);

// we can use this reference to change the text of the elements
containers.text("DOM Querying");

// we can also set styles on this element
containers.css("background-color", "red");

// below is the vanilla javascript equivalent
// var containers = document.querySelectorAll(".container");
// containers.forEach(function(container) {
//   container.style.backgroundColor = "red";
// });

// as you can see we don't have to loop through with jquery