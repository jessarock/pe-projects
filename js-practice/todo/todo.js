

const todoApp = {

	todoList: [], 
	idGenerator: 0, 

	print: function(note = "") {
		console.log(`---- ${note}`); 
		console.log("To do List: ", this.todoList);
	}, 

	add: function(content) {
		const todoItem = {
			id: `a-${this.idGenerator++}`, 
			content: content, 
		}; 
		this.todoList.push(todoItem); //<--unsure what spread it out means
		this.print(`added ${content}`); 
	}, 

	remove: function(id) {
		var todoItem = {};
		this.print(`removed ${this.todoList[id].content}`);
		this.todoList.splice(id, 1); 
	}, 

	complete: function(id) {
		this.todoList[id].complete = true; 
		this.print(`completed ${this.todoList[id].content}`);
	}, 
};



todoApp.add("eat dinner"); 
todoApp.add("feed the dog"); 
todoApp.add("drink water"); 
todoApp.add("practice javascript"); 
todoApp.add("drink more water"); 
todoApp.add("go to sleep"); 

todoApp.remove(3); 

todoApp.complete(2); 

const todoApp = {

	todoList: [], 
	idGenerator: 0,

	print: function(note = "") {
		console.log(`------ ${note}`); 
		console.log("To Do List: ", todoList); 
	}, 

	add: function(content) {
		const todoItem = {
			id: `a-${this.idGenerator++}`, 
			content: content, 
		}; 
		this.todoList.push(todoItem);
		this.print(`added ${content}`); 

	},

	remove: function(id) {
		var todoItem = {}; 
		this.print(`removed ${this.todoList[id].content}`);
		this.todoList.splice(id, 1); 
	},

	complete: function(id) {
		this.todoList[id].complete = true; 
		this.print(`complete ${this.todoList[id].content}`); 
	}, 
}; 





































