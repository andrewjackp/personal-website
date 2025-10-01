
const range = document.querySelector("[id='r']");

range.addEventListener('input', function(event){

const allColumns = document.querySelectorAll(".button");

allColumns.forEach(function(column) {

	column.setAttribute("style", `--small-border-radius: ${range.value}px; border: 3px solid black;`);

		if (range.value === "0") {
				column.setAttribute("style", `--small-border-radius: 0px; border: 0px;`);
		} else {
				column.setAttribute("style", `--small-border-radius: ${range.value}px; border: 3px solid black;`);
		}
	});
});