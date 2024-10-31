import {listData} from "./data/stories.js";
import {renderForm, isLoggedIn, signOut, handleSignIn, signIn} from "./views/sign-in.js";
import {el} from "./utilities/utilities.js";

console.clear();

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
	const action = event.target.dataset.action;

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
		console.log("hello: ", event.target.dataset.id);

		app.innerHTML = renderDetail(event.target.dataset.id);

		if (isLoggedIn == true) {
			console.log("SUP");
			app.innerHTML = renderCommentForm();
		}
	}
});

window.addEventListener("click", (event) => {
	if (action == "signInOutButton") {
		console.log("yes");
		signOut(event.target.closest("form"));
	}
	
	if (action == "commentBtn") {
		console.log("comment-clicked");

		var commentInput = el(".comment-input");

		addComment(commentInput.value);
	}
})

function renderCommentForm() {
	return `
		<form id="comment-form">
			<label for="comments">Share your thoughts</label>
			<input type="text" class="comment-input">
			<button type="submit" data-action="commentBtn">Add Comment</button>
			<output></output>
		</form>
			`;
}

function addComment(content) {
	const comment = {
		id: `${idMarker++}`,
		content: content,
		username: "andy"
	};
	console.log(content);
	comments.push(content);

	console.log(comments);
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

document.addEventListener("submit", (event) => {
	event.preventDefault();

	if(handleSignIn()){
		app.innerHTML = renderList(listData);
	}
});

initializeApp();