Day 1
/*
const arr = [1, 2, 3, 4, 5];
const slicedArr = arr.slice(2, 4);
start: The index at which to start the slice. The start index is inclusive, meaning that the element at the start index will be included in the new array. If the start index is negative, it is counted from the end of the array.
end: The index at which to end the slice. The end index is exclusive, meaning that the element at the end index will not be included in the new array. If the end index is omitted, the slice will extend to the end of the array.
console.log(slicedArr); // [3, 4]
console.log(arr); // [1, 2, 3, 4, 5]

*/
let colors=["red","red-orange","orange","yellow"]

//Difference Between Equality of Objects and Equality of References in Java
colors.splice(1,0,'orange-red');//0 means delete nothing and add somethig on that position
Equality of objects means when two separate objects happen to have the same values/state. Whereas equality of references means when two object references point to the same object. The == operator can be used to check if two object references point to the same object. To be able to compare two java objects of the same class the boolean equals(Object obj) method must be overridden and implemented by the class. The implementer decides which values must be equal to consider two objects to be equal.

javascipt just compares the references not the contents 
[1]==[1] //false
[1,2,3]===[1,2,3]//false //here the references are stored not the contents so false
let numsCopy=nums ///if any changes in nums it reflects to numsCopy

object literals
In JavaScript, an object literal is a way to create an object using a concise syntax. It allows you to define and create an object in a single statement, specifying its properties and values. Object literals are commonly used for creating simple objects or for defining configuration settings.
// Object literal
let person = {
  firstName: 'John',
  lastName: 'Doe',
  age: 30,
  isStudent: false,
  greet: function() {
    console.log('Hello, ' + this.firstName + ' ' + this.lastName + '!');
  }
};

// Accessing properties
console.log(person.firstName); // John
console.log(person.age);       // 30

// Calling a method
person.greet(); // Hello, John Doe!
//PLEASE DON'T TOUCH THIS LINE!
const restaurant = {
    name: 'Ichiran Ramen',
    address: `${Math.floor(Math.random() * 100) + 1} Johnson Ave`,
    city: 'Brooklyn',
    state: 'NY',
    zipcode: '11206',
}
//PLEASE DON'T TOUCH THIS LINE!
const restaurant = {
    name: 'Ichiran Ramen',
    address: `${Math.floor(Math.random() * 100) + 1} Johnson Ave`,
    city: 'Brooklyn',
    state: 'NY',
    zipcode: '11206',
}
//YOUR CODE GOES DOWN HERE:
 const fullAddress = `${restaurant.address}, ${restaurant.city}, ${restaurant.state} ${restaurant.zipcode}`;



 
 


  
