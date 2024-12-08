const descriptors = [
	{	heading: "Fur-Friendly Colors",
		description: "Bold, harmonious palettes that bring even the wildest textures together, ensuring your brand looks polished and cohesive, no matter the fur or features." 
	},
	{	heading: "All-Eyes Typography",
		description: "Readable and clear, designed to accommodate any number of eyes—whether you’ve got just one, or a hundred peeking through fur." 
	},
	{	heading: "Appendage Accessibility",
		description: "Our systems are designed for all, from claws to paws to wings, ensuring easy interaction no matter how you click, tap, or thump." 
	}
];

const renderItem  = (item) => {
	return `
		<li class='preview-card'>
			<article class='article-preview-card'>
				<h2 class='strong-voice'>${item.heading}</h2>
				<p class='quiet-voice'>${item.description}</p>
			</article>
		</li>
	`
}

const renderItemList = (list) => {
	const productList = document.getElementById("preview-list");
	productList.innerHTML = list.map(renderItem).join('');
}

renderItemList(descriptors);

// function renderList (list) {
// 	var outlet = document.querySelector("#outlet");
// 	let template = "<ul id='product-grid'>";
// 	list.forEach((item) => {
// 		template += renderItem(item);
// 	});
// 	template += "</ul>";
// 	outlet.innerHTML = template;
// }

