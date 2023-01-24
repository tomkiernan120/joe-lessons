<?php

// below is a php object which is a collection of properties and methods

class Person {
    // below is a property
    public $name = "John";

    // below is a constructor method
    // this is called when the object is created
    // here you can set the property when instantiating the object
    public function __construct($name) {
        $this->name = $name;
    }
    // below is a method
    public function sayHello() {
        echo "Hello";
    }

    public function sayName() {
        echo $this->name;
    }
}

// below is an example of instantiating an object
$person = new Person("Tom");

// below is an example of calling a method on an object
// what do you think the output will be?
// $person->sayName();


// below try instantiating another object and calling a method on it
// what do you think the output will be?

// below try creating a new instance of person with a different name

// below try calling the sayName method on the new object


// below is an example of inheritance
class Student extends Person {

    public $firstname;
    public $lastname;

    public function __construct($name) {
        $this->firstname = explode(" ", $name)[0];
        $this->lastname = explode(" ", $name)[1];

        // below is an example of calling the parent constructor
        parent::__construct($name);
    }

    // below is an example of overriding a method
    // if a function has the same name as a function in the parent class it overwrites it
    public function sayHello() {
        echo parent::sayHello();
    }
}

// below is an example of instantiating a student object
$student = new Student("Bob smith");

echo "<pre>";
var_dump($student);
echo "</pre>";

// below is an example of calling a method on the student object
// what do you think the output will be?
// $student->sayHello();

// below we are call the sayName method on the student object
// what do you think the output will be?
// $student->sayName();
