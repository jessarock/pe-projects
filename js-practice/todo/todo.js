


function print(note = "") {
	console.log(`---------- ${note}`); 
	console.log("To Do List: ", todoList); 
}


const todoList = [];
var count = 0; 

function add(content) {
	const todoItem = {
		id: `a-${count++}`, 
		content: content, 
	};
	todoList.push(todoItem); 
	print(`added ${content}`); 
} 

function remove(id) {
	var todoItem = {};
	print(`removed ${todoList[id].content}`); 
	todoList.splice(id, 1); 
}

function complete(id) {
	todoList[id].complete = true; 
	print(`completed ${todoList[id].content}`); 

}

add("eat dinner"); 
add("feed the dog"); 
add("drink water"); 
add("practice javascript"); 
add("drink more water"); 
add("go to sleep"); 

remove(2); 

complete(0);






