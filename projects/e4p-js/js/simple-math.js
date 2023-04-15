console.clear();



const $form = document.querySelector('form'); 
const $inputOne = $form.querySelector('input'); 
const $inputTwo = $form.querySelector('input'); 
const $outlet = document.querySelector('output'); 


$form.addEventListener('submit', function(event) {
	event.preventDefault(); 

	if($input.value) {
		var message = "The numbers you entered are" + $inputOne + "and" + $inputTwo + "."; 
		$outlet.innerHTML = `<p>${message}</p>;`
	}
});

console.clear(); 
