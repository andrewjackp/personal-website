const todos = [];

let count = 0;

function print(note = ""){
	console.log(`---- ${note}`);
	console.log('todos: ', todos);
}

function add(content){
	const todo = {
		id: `a${count++}`,
		content: content
	};

	todos.push(todo);
	print(`added ${content}`);
}

function remove(id){
	var todo = {};
	todos.splice(id, 1);

	print(`removed ${todos[id].content}`);
}

function complete(id){
	todos[id].complete = true;

	print(`completed: ${todos[id].content}`);
}

function update(id, content) {
	todos[id].content = content;
	print(`updated: ${todos[id].content}`);
};


add("walk dog");
add("brush teeth");
add("make coffee");
add("water the plants");

remove(1);

complete(0);

update(2, "make a new coffee");