
function ToDo(todos = [], idMarker = 0) {

	this.todos = todos,
	this.idMarker = idMarker,

	this.complete = function(id) {
		console.log(`completed: ${this.todos}`);
	},

	this.print = function(note = "") {
		console.log(`---- ${note}`);
		console.log('todos: ', todos);
	}
}

let myTasks = [
	new ToDo ("make coffee", 1),
	new ToDo ("walk dog", 2),
	new ToDo ("make lunch", 3)
];

localStorage.myTasks = JSON.stringify(myTasks);

let data = JSON.parse(localStorage.getItem('myTasks'));

data.forEach(tasks => {
	console.log(tasks)
});

// task1.complete();

// console.log(task2.idMarker);

// task2.print("add laundry");

// ToDo.prototype.add = function(content) {
// 	const todo = {
// 		id: `a${this.idMarker++}`,
// 		content: content
// 	};

// 	this.todos = [...this.todos, todo];
// 	this.print(`added ${content}, ${this.idMarker}`);
// }

// task2.add("make coffee");

// const data = localStorage;

// var idMarker = 0;

// idMarker++;

// function initialize() {
// 	if ( data.getItem('todos') ) {
// 		console.log('todos');
// 	} else {
// 		data.setItem('todos', JSON.stringify({ idMarker: 0 }) );
// 	};
// };

// const todoApp = {

// 	todos: [],
// 	idMarker: 0,

// 	print: function(note = "") {
// 		console.log(`---- ${note}`);
// 		console.log('todos: ', this.todos);
// 	},

// 	add: function(content) {
// 	const todo = {
// 		id: `a${this.idMarker++}`,
// 		content: content
// 	};

// 	this.todos = [...this.todos, todo];
// 	this.print(`added ${content}`);
// 	},	

//  	remove: function(id) {
// 		this.todos.splice(id, 1);
// 		this.print(`removed ${this.todos[id].content}`);
// 	},

//  	complete: function(id) {
// 		this.todos[id].complete = true;
// 		this.print(`completed: ${this.todos[id].content}`);
// 	},

//  	update: function(id, content) {
// 		this.todos[id].content = content;
// 		this.print(`updated: ${this.todos[id].content}`);
// 	},
// };

// const otherTodo = todoApp;

// todoApp.add("walk dog");
// todoApp.add("brush teeth");
// todoApp.add("make coffee");
// todoApp.add("water the plants");

// todoApp.remove(1);

// todoApp.complete(0);

// otherTodo.add("Go to the beaaach");

// todoApp.update(2, "make a new coffee");