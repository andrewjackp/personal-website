var stuff = [
	{
		name: "history book",
		type: "nonfiction"
	},
	{
		name: "bio book",
		type: "nonfiction"
	},
	{
		name: "bottle",
		type: "trash"
	},
	{
		name: "applesauce",
		type: "trash"
	},
	{
		name: "candle holder",
		type: "reusable"
	},
	{
		name: "costo card",
		type: "reusable"
	},
	{
		name: "espresso cup",
		type: "reusable"
	},
	{
		name: "candy bar",
		type: "trash"
	},
];

// create function - accepts an array
// generates markup
// creates a list of items

var trash = stuff.filter( function(item) {
	return item.type === "trash";
});

var nonfiction = stuff.filter( function(item) {
	return item.type === "nonfiction";
});

var reusable = stuff.filter( function(item) {
	return item.type === "reusable";
})

function printArr( arr, heading ) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);
	
	var ol = document.createElement('ol');
	
	arr.forEach( function(item) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
};

printArr( trash, "things to throw away" );
printArr( reusable, "things to reuse");
printArr( nonfiction, "books that are nonfiction")