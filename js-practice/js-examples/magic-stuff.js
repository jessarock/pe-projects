
var simpleDeskItems = [
	"water bottle", 
	"glasses case", 
	"chapstick", 
	"hair tie", 
	"headache stick", 
	"remote control", 
	"candle",
	]


var deskItems = [
	{
		name: "water bottle", 
		type: "container",
	},
	{
		name: "glasses case", 
		type: "container", 
	},
	{
		name: "chapstick", 
		type: "self care",
	},
	{
		name: "light remote", 
		type: "device", 
	},
	{
		name: "headache stick", 
		type: "self care", 
	},
	{
		name: "heater remote", 
		type: "device", 
	}, 
	{
		name: "candle", 
		type: "self care",
	},
];


var selfCare = deskItems.filter (function(item) {
	return item.type == "self care"; 
}); 

var device = deskItems.filter (function (item) {
	return item.type == "device"; 
});

var container = deskItems.filter (function (item) {
	return item.type == "container"; 
});

//create function that accepts an array and generates markup
//must have heading and create a list of the items 

function buildListSection(items, heading) {
	var h2 = document.createElement('h2'); 
	h2.textContent = heading; 
	document.body.appendChild(h2); 

	var ol = document.createElement('ol'); 

	items.forEach ( function(item) {
		var li = document.createElement('li'); 
		li.textContent = item.name; 
		ol.appendChild(li); 
	});

	document.body.appendChild(ol); 
}
	
buildListSection( selfCare, "Things Jess uses for self care."); 

buildListSection ( device, "Things Jess uses to power on her things."); 

buildListSection ( container, "Things Jess uses to put stuff in."); 
	



