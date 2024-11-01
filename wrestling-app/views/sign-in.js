import { el } from "../utilities/utilities.js";

export let isLoggedIn = false;

var signInBtn = null;

export function renderForm() {
	return `
	<form id="user-form" data-form="user-form">
  		<label for="username">Username:</label>
  		<input type="text" id="username" name="username">
  		<button type="submit" id="sign-in-btn">Enter</button>
	<output>
	</output>
</form>
	`;
}

function signInOutButton(isLoggedIn) {
	var text = "Sign in";

	if (isLoggedIn) {
		text = "Sign out";
	}
	return `
	<button type="submit" data-action='signInOutButton' id='signInOutButton'>${text}</button>`;
}


export function signIn(name) {
	const credentials = [
		{
			username: "andy"
		}
	];

	signInBtn = el(".sign-in");
	signInBtn.textContent = "";

	for (let cred = 0; cred < credentials.length; cred++) {
		if (credentials[cred].username == name) {
			signInBtn = el(".sign-in");
			signInBtn.textContent = "Sign Out";
			isLoggedIn = true;
			return true;
		} else {
			return false;
		}
	}
}


export function handleSignIn() {
	var form = document.querySelector("#user-form");
	var username = form.querySelector("#username");
	var output = form.querySelector("output");
	signIn(username.value);
	output.innerHTML = `
		Welcome ${username.value}
	`
}


export function signOut(form) {
	var form = document.querySelector("#user-form");
	var username = form.querySelector("#username");
	var output = form.querySelector("output");

	const credentials = [
		{
			username: ""
		}
	];

	for (let cred = 0; cred < credentials.length; cred++) {
		if (credentials[cred].username == "") {
			isLoggedIn = false;
			signInBtn = el(".sign-in");
			signInBtn.textContent === "Sign In";
			return false;
		} else {
			return true;
		}
	}
	signInBtn.textContent === "Sign In"
	output.innerHTML = "you have signed out";
}

