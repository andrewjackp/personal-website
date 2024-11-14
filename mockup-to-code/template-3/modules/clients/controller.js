const clientQuotes = [
	{	rating: "images/star.svg",
		quote: "“Pellentesque maecenas vitae vehicula eget. Ultricies ac id massa maecenas nulla arcu lacus. Turpis porttitor.”",
		img: "images/blank_pic.svg",
		name: "Courtney Henry",
		job: "Marketing Coordinator"
	}
];

const renderClient = (item) => {
	return `
		<li class='client-card-item'>
			<article class='client-article-card'>
				<picture>
					<img src="${item.img}" alt="client-img">
				</picture>

				<text-content>
					<p class='loud-voice'>${item.quote}</p>
					<span class='quiet-voice'>${item.name}</span>
					<span class='quiet-voice'>${item.job}</span>
				</text-content>
				
			</article>
		</li>
	`
};

const renderClients = (items) => {
	const clientListQuotes = document.getElementById("client-list");
	clientListQuotes.innerHTML = items.map(renderClient).join('');
}

renderClients(clientQuotes);