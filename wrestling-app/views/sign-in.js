import {el} from "../utilities/utilities.js";

export let isLoggedIn = false;

export function renderForm() {
	return `
	<form id="user-form" data-form="user-form">
  		<label for="username">Username:</label>
  		<input type="text" id="username" name="username">
  		<button type="submit">Enter</button>
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

	for (let cred = 0; cred < credentials.length; cred++) {
		if (credentials[cred].username == name) {
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

	signIn(username.value);
}


export function signOut(form) {
	var username = form.querySelector("#username");
	var output = form.querySelector("output");

	output.innerHTML = "";

	const credentials = [
		{
			username: ""
		}
	];

	for (let cred = 0; cred < credentials.length; cred++) {
		if (credentials[cred].username == "") {
			isLoggedIn = false;
		} else {
			signOutButton((isLoggedIn = true));
		}
	}

	output.innerHTML = "you have signed out";
}
