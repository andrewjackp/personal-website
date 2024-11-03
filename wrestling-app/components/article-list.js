function renderItem(item) {
	return `
		<article>
			<h2>${item.newsStory}</h2>
			<span>${item.caption}</span>
			<button data-view="detail" data-id="${item.id}">Details</button>
		</article>
	`;
}

export function renderList(list) {
	let template = "<ul>";
	list.forEach((item) => {
		template += `
		<li>${renderItem(item)}</li>`;
	});
	template += "</ul>";
	return template;
}