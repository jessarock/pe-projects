

console.clear(); 


const form = document.querySelector('form'); 
const retirementAge = document.querySelector('#retirement-age'); 
const outlet = document.querySelector('output'); 
const currentAge = document.querySelector('#current-age'); 
 



form.addEventListener('submit', function(event) {
	event.preventDefault(); 
	 const currentAgeVal = document.querySelector('#current-age').value; 
	 const retirementAgeVal = document.querySelector('#retirement-age').value; 

    const yearsLeft = retirementAgeVal - currentAgeVal; 
    const currentYear = new Date().getFullYear(); 
    const retirementYear = currentYear  + yearsLeft; 

   if(currentAgeVal && retirementAgeVal !== '') {
    outlet.innerHTML = `
    You have ${yearsLeft} years left until you can retire. <br> 
    It's ${currentYear}, so you can retire in ${retirementYear}.`
    
  } else {
    outlet.innerHTML = `Awww come on! Let's make a retirement plan!`;
  }
});