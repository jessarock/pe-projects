

console.clear(); 

const form = document.querySelector('form'); 
const length = document.querySelector('#length'); 
const width = document.querySelector('#width'); 
const outlet = document.querySelector('output'); 

form.addEventListener('submit', function(event) {
	event.preventDefault(); 
	const lengthVal = document.querySelector('#length').value; 
	const widthVal = document.querySelector('#width').value; 

	const areaFeet = lengthVal * widthVal; 
	console.log(areaFeet); 

	const areaMeters = areaFeet * 0.09290304;

	 if(lengthVal && widthVal !== '') {
    outlet.innerHTML = 
    `You entered dimensions of ${lengthVal} feet by ${widthVal} feet. <br>
    The area is ${areaFeet} square feet or ${Math.round(areaMeters)} square meters.`;
    
  } else {
    outlet.innerHTML = `Please enter some room dimensions.`;
  }
})
