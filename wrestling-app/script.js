import {listData} from "./data/stories.js";
import {renderForm, isLoggedIn, signOut, handleSignIn, signIn} from "./views/sign-in.js";
import {el} from "./utilities/utilities.js";

let app = null;

const comments = [];

let idMarker = 0;

function renderItem(item) {
	return `
		<article>
			<h2>${item.newsStory}</h2>
			<span>${item.caption}</span>
			<button data-view="detail" data-id="${item.id}">Details</button>
		</article>
	`;
}

function renderList(list) {
	let template = "<ul>";
	list.forEach((item) => {
		template += `
		<li>${renderItem(item)}</li>`;
	});
	template += "</ul>";
	return template;
}

function renderDetail(id) {
	//find the right page
	//generate template showing that data
	const found = listData.find(function (item) {
		return item.id == id;
	});
	return `
		<article>
		<h2>${found.newsStory}</h2>
		</article>
	`;
}

function renderDashboard(page) {
	return `${page.title}`;
}

window.addEventListener("click", (event) => {
	const view = event.target.dataset.view;

	if (view == "sign-in") {
		console.log("sign in view");
		app.innerHTML = renderForm();
	}

	if (view == "list") {
		console.log(view);

		app.innerHTML = renderList(listData);
	}

	if (view == "dashboard") {
		console.log(view);

		app.innerHTML = renderDashboard({ title: "welcome" });
	}

	if (view == "detail") {
		console.log("article id: ", event.target.dataset.id);

		app.innerHTML = renderDetail(event.target.dataset.id);

		if (isLoggedIn == true) {
			app.innerHTML = renderCommentForm();
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
		console.log("comment-clicked");

		console.log(event.target);

		var commentInput = event.target.querySelector("#comment-input");

		console.log(commentInput.value);

		addComment(commentInput.value);

	}

	if (form === "user-form") {
		console.log("user form-clicked");

		if (handleSignIn()){
			app.innerHTML = renderList(listData);
		}
	}
});

function renderCommentForm() {
	return `
		<form data-form="comment-form" id="comment-form">
			<label for="c">Share your thoughts</label>
			<input type="text" id="comment-input">

			<button type="submit">Add Comment</button>
		</form>
	`;
}

function addComment(content) {
	const comment = {
		id: `${idMarker++}`,
		content: content,
		username: "andy"
	};
	comments.push(content);
}

// function renderComment(comment) {
// 	return `
// 		<article>
// 			<h2>${comment.username}</h2>
// 			<span>${comment.content}</span>
// 		</article>
// 	`;
// }

// function renderComments(comments) {
// 	let template = "<ul>";
// 	list.forEach((comment) => {
// 		template += `
// 		<li>${renderComment(comment)}</li>`;
// 	});
// 	template += "</ul>";
// 	return template;
// }

function initializeApp() {
	app = document.getElementById("app");
	signIn("andy");
	app.innerHTML = renderList(listData);
};

initializeApp();