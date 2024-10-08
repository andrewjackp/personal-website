// convert euros to us dollars
// amount from = euros
// amount to = us dollars
// rate from = curr exchange in euros
// rate to = curr exchange in us dollars
// amount to = amount from * rate from / rate to

console.clear();

const $form = document.querySelector('form');
const $input = $form.querySelector('input');
const $outlet = document.querySelector('output');

function convertCurrency() {
	if ($input.value) {
		var amountFrom = $input.value;
		var amountTo = amountFrom * 1.109;

		if ($input.value >  0) {
			$outlet.innerHTML = `<p>${amountTo}</p>`;
		}	else {
		$outlet.innerHTML = `<p>Please enter more than zero.</p>`;
	}
}
}

$form.addEventListener('submit', function(event) {
	event.preventDefault();
	
	convertCurrency();
});

// if the user types again.. then clear the output? 
// is this better UX ?
$input.addEventListener('input', function() {
	$outlet.innerHTML = ``;
});
