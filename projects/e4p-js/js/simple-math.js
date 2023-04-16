

//user enters a number 
//user enters a second number 
//convert those strings to numbers 
//
console.clear(); 

const form = document.querySelector('form'); 
const first = document.querySelector('#first'); 
const second = document.querySelector('#second'); 
const outlet = document.querySelector('output'); 

form.addEventListener('submit', function(event) {
	event.preventDefault(); 
	const firstVal = parseFloat(first.value); 
	const secondVal = parseFloat(second.value); 

 if (!isNaN(firstVal) && !isNaN(secondVal)) {
    const add = Math.round(firstVal + secondVal);
    const subtract = Math.round(firstVal - secondVal);
    const multiply = Math.round(firstVal * secondVal);
    const divide = Math.round(firstVal / secondVal);
    outlet.innerHTML = `
      ${firstVal} + ${secondVal} = ${add}<br>
      ${firstVal} - ${secondVal} = ${subtract}<br>
      ${firstVal} * ${secondVal} = ${multiply}<br>
      ${firstVal} / ${secondVal} = ${divide}<br>`;
  } else {
    outlet.innerHTML = `Woah there, buddy! Enter some numbers why don't ya?!`;
  }
});





	

