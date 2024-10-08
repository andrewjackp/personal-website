//define principal
//define rate of interest
//enter the number of years
//amount equals principal multiplied by (1 + rate * time)

const form = document.querySelector('form');
const input = form.querySelector('input');


function getSimpleInterest() {

    const principal = document.querySelector('#principal').value;
    const interest = document.querySelector('#interest').value / 100;
    const time = document.querySelector('#time').value;

    const output = document.querySelector('output');
    output.innerHTML = "the result is $" + (principal * (1 + interest * time));

}

form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    getSimpleInterest();
});

