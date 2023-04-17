

console.clear(); 

const form = document.querySelector('form'); 
const length = document.querySelector('#length'); 
const width = document.querySelector('#width'); 
const outlet = document.querySelector('output'); 

form.addEventListener('submit', function(event) {
	event.preventDefault(); 
	const lengthVal = document.querySelector('#length').value; 
	const widthVal = document.querySelector('#width').value; 

	const area = lengthVal * widthVal; 
	console.log(area); 

	const paintNeeded = Math.ceil(area / 350); 
	console.log(paintNeeded); 

	 if(lengthVal && widthVal !== '') {
    outlet.innerHTML = `
    You will need to purchase ${paintNeeded} gallon(s) of paint to cover ${area} square feet.`;
    
  } else {
    outlet.innerHTML = `Painting ceilings is tough work, but this should make the buying process easier!`
  }
});
