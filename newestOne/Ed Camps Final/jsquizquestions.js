
// animals is an array of topic objects.
// Each topic object has an image and an array of question objects.
// Each question object has a question and the correct answer.
var gnr = 
[
	{
		image:"Arrays", 
		questions: 
		[
			{quest:"What do you use to reference an element in a non-associative array?",answer:"number"},
			{quest:"What function removes and returns the last element in an array?",answer:"pop()"},
			{quest:"What function adds an element to the end of an array and returns the new length of the array", answer:"push()"},
			{quest:"What function removes and returns an element from the beginnning of an array?", answer:"shift()"}
		]
	},
	{	
		image:"Variables", 
		questions: 
		[
			{quest:"Do variables have fixed types?",answer:"no"},
			{quest:"Can variables hold a function as their value?",answer:"yes"},
			{quest:"What operator checks if one variable is not equal to the value or type of another variable?",answer:"!=="},
			{quest:"If a variable has not been initialized, what type is it?",answer:"undefined"}
		]
	},
	{	
		image:"Functions", 
		questions: 
		[
			{quest:"True or false: All javascript functions return a value.",answer:"false"},
			{quest:"What operator follows the name of a function in order to call the function?",answer:"()"},
			{quest:"If x is a variable holding a number, what does the variable y do when it is stated if it holds example(x)?",answer:"calls example with the value of x"},
			{quest:"Can a function be defined and called in the same line of code?",answer:"yes"}
		]
	},
	{	
		image:"Objects", 
		questions: 
		[
			{quest:"What is the max number of properties an object can have?",answer:"infinite"},
			{quest:"What type of variable can a property of an object hold?",answer:"any"},
			{quest:"What operator goes between an object name and its property name to refer to that property?",answer:"."},
			{quest:"Do quotes surround an object property value if it is meant to be a number?",answer:"no"}
		]
	}
];

