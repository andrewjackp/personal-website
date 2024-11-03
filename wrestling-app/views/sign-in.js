import { el } from "../utilities/utilities.js";

import { renderForm } from "../components/entry-form.js"

export let isLoggedIn = false;

var signInBtn = null;

function signInOutButton(isLoggedIn) {
	var text = "Sign in";

	if (isLoggedIn) {
		text = "Sign out";
	}
	return `
	<button type="submit" data-action='signInOutButton' id='signInOutButton'>${text}</button>`;
}


// export function signIn(name) {
// 	const credentials = [
// 		{
// 			username: "andy"
// 		}
// 	];

// 	signInBtn = el(".sign-in");
// 	signInBtn.textContent = "";

// 	for (let cred = 0; cred < credentials.length; cred++) {
// 		if (credentials[cred].username == name) {
// 			signInBtn = el(".sign-in");
// 			signInBtn.textContent = "Sign Out";
// 			isLoggedIn = true;
// 			return true;
// 		} else {
// 			return false;
// 		}
// 	}
// }


// export function handleSignIn() {
// 	var form = document.querySelector("#user-form");
// 	var username = form.querySelector("#username");
// 	var output = form.querySelector("output");
// 	signIn(username.value);
// 	output.innerHTML = `
// 		Welcome ${username.value}
// 	`
// }


// export function signOut(form) {
// 	var form = document.querySelector("#user-form");
// 	var username = form.querySelector("#username");
// 	var output = form.querySelector("output");

// 	const credentials = [
// 		{
// 			username: ""
// 		}
// 	];

// 	signInBtn = el(".sign-in");
// 	signInBtn.textContent = "Sign In";

// 	for (let cred = 0; cred < credentials.length; cred++) {
// 		if (credentials[cred].username == "") {
// 			isLoggedIn = false;
// 			return false;
// 			output.innerHTML = "you have signed out";
// 		} else {
// 			return true;
// 		}
// 	}
// }

