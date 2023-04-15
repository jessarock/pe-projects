console.clear(); 




const $form = document.querySelector('form'); 
const $input = $form.querySelector('input'); 
const $outlet = document.querySelector('output');



$form.addEventListener('submit', function(event) {
	event.preventDefault();
	console.log('You clicked enter on this form.'); 

	if($input.value) {
		var message = `Hello, ${$input.value}. Nice to meet you!`;
		$outlet.innerHTML = `<p>${message}</p>`; 
	} else {
		$outlet.innerHTML = `<p>Please enter your name.</p>`
	}

});









