
console.clear(); 


const $form = document.querySelector('form'); 
const $input = $form.querySelector('input'); 
const $outlet = document.querySelector('output'); 

$form.addEventListener('submit', function(event) {
	event.preventDefault(); 
	console.log('You clicked submit.');

	if($input.value) {
		let count = ($input.value).length;
		console.log(count); 
		var message = `You entered ${$input.value}. ${$input.value} has ${count} characters.`; 
		console.log(message); 
		$outlet.innerHTML = `<p>${message}</p>`
	}else {
		$outlet.innerHTML = `<p>Please enter a word.</p>`
	}
}); 


let myText = document.getElementById('my-text'); 
myText.addEventListener("input", () => {
	let count = (myText.value).length; 
	document.getElementById('count-result').textContent = `character count: ${count}`; 

}); 


