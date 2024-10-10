
function ToDo(task, id = 0, complete = false) {

	this.task = task,
	this.id = id,
	this.complete = complete
	// this.status = completeCheck

};


// let completeCheck = function(){
// 	console.log(this.complete);
// }

let myTasks = [
	new ToDo ("make coffee", 1, true),
	new ToDo ("walk dog", 2, false),
	new ToDo ("make lunch", 3, false),
	new ToDo ("learn lesson", 4, true)
];

localStorage.setItem("myTasks", JSON.stringify(myTasks));

let tasks = JSON.parse(localStorage.getItem('myTasks'));

// tasks.forEach(todo => {
// 	todo.status = completeCheck;
// 	todo.status();
// });

function removeTask(id){
	const filtered = tasks.filter(items => {
		return items.id != id;
	});
	data = [...filtered];
	console.log(filtered);
};

function update(task, id, complete) {
	tasks[id].task = task;
	tasks[id].complete = complete;
};

removeTask(1); 

update("do the dishes", 2, false);


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