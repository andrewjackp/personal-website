import { listData } from "../data/stories.js";

export function renderDetail(id) {
	//find the right page
	//generate template showing that data
	const found = listData.find(function (item) {
		return item.id == id;
	});
	console.log(found);
	return `
		<article>
		<h2>${found.newsStory}</h2>
		</article>
	`;
}

export function renderCommentForm() {
	return `
		<form data-form="comment-form" id="comment-form">
			<label for="c">Share your thoughts</label>
			<input type="text" id="comment-input">

			<button type="submit">Add Comment</button>
		</form>
		<div id="comment-outlet"></div>
	`;
}

function addComment(content) {

	const comment = {
		id: `${idMarker++}`,
		content: content,
		username: "andy"
	};
	comments = [{...comment}];
	renderComments(comments);
}

function renderComment(comment) {
	return `
		<li>
			<article>
				<h2>${comment.username}</h2>
				<span>${comment.content}</span>
			</article>
		</li>
	
	`;
}

function renderComments(comments) {
	var outlet = document.querySelector("#comment-outlet");
	let template = "<ul id='comment-grid'>";
	comments.forEach((comment) => {
		template += 
		renderComment(comment);
	});
	template += "</ul>";
	outlet.innerHTML = template;
}

