const clientQuotes = [
	{	rating: "images/star.svg",
		quote: "Orci vel eget in eu. Integer amet porttitor hendrerit etiam arcu, aliquet duis pretium consequat. Semper sed viverra enim ut nunc.",
		img: "images/avatar.svg",
		name: "Courtney Henry",
		job: "Marketing Coordinator"
	}
	// {	rating: "images/star.svg",
	// 	quote: "Tincidunt risus, blandit proin semper. Tellus ac pellentesque convallis vitae. Lorem enim cursus et consequat viverra id justo ullamcorper. Vel.",
	// 	img: "images/avatar.svg",
	// 	name: "Courtney Henry"
	// }
];

const renderClient = (item) => {
	return `
		<li class='client-card-item'>
			<article class='client-article-card'>				
				<p class='loud-voice'>${item.quote}</p>
				<picture>
					<img src="${item.img}" alt="client-img">
				</picture>
				<span class='strong-voice'>${item.name}</span>
				<span class='quiet-voice'>${item.job}</span>
			</article>
		</li>
	`
};

const renderClients = (items) => {
	const clientListQuotes = document.getElementById("client-list");
	clientListQuotes.innerHTML = items.map(renderClient).join('');
}

renderClients(clientQuotes);