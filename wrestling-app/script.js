// import { renderForm, isLoggedIn, signOut, handleSignIn } from "./views/sign-in.js";
import { el } from "./utilities/utilities.js";
import user from "./global/user.js";
import { renderHome } from "./views/home.js";
import { renderDetail, renderCommentForm } from "./views/article-detail.js";
import { renderForm } from "./components/entry-form.js";
import { renderDashboard } from "./views/dashboard.js";

let app = null;

let comments = [];

let idMarker = 0;

var signInBtn = null;


window.addEventListener("click", (event) => {
	const view = event.target.dataset.view;
	const action = event.target.dataset.action;

	if (view == "sign-in") {
		console.log("sign in view");
		app.innerHTML = renderForm();
	}


	if (view == "home") {
		console.log("home");

		renderHome();
	}

	if (view == "dashboard") {
		console.log(view);

		app.innerHTML = renderDashboard({ title: "welcome" });
	}

	if (view == "detail") {
		console.log("article id: ", event.target.dataset.id);

		app.innerHTML = renderDetail(event.target.dataset.id);
		app.innerHTML += renderCommentForm();

		// if (isLoggedIn == true) {
		// 	app.innerHTML += renderCommentForm();
		// }
	}

	signInBtn = el(".sign-in");

	if (signInBtn.textContent === "Sign Out"){
		console.log("btn says sign out");
		signInBtn.setAttribute('data-action', 'sign-out');

		if (action === "sign-out") {
			console.log("signed out");
			signOut(event.target.closest("form"));
		}
	}
});

window.addEventListener("submit", (event) => {
	event.preventDefault();

	const action = event.target.dataset.action;
	const form = event.target.dataset.form;

	console.log(form);

	// if (action == "signInOutButton") {
	// 	console.log("yes");
	// 	signOut(event.target.closest("form"));
	// }
	
	if (form === "comment-form") {
		var commentInput = event.target.querySelector("#comment-input");
		addComment(commentInput.value);
	}

	if (form === "user-form") {
		console.log("user form-clicked");
		user.handleSignIn();
		console.log(username.value, "- signed in")
	}
});


function initializeApp() {
	app = document.getElementById("app");
	renderHome();
	// user.signIn("andy");
};

initializeApp();