const featureList = [
	{	title: "Massa leo scelerisque",
		description: "Velit nulla eu tortor elit sed. Volutpat ornare mi tempor, hac morbi faucibus. ",
		img: "images/features/cloud_icon.svg",
		id: 1
	},
	{
		title: "Se, odio elementum",
		description: "Aliquam vehicula pellentesque id mi quam ipsum. Arcu nisl faucibus mattis etiam.",
		img: "images/features/watch_icon.svg",
		id: 2
	},
	{
		title: "Elementum enim tempus",
		description: "At tristique elementum metus blandit id sed vel eu a. Diam sed feugiat diam nisi est. Dictumst elit.",
		img: "images/features/youtube_icon.svg",
		id: 3
	},
	{
		title: "Tempor egestas augue",
		description: "Eu metus, at orci dui sapien. Semper fames est ut gravida. Neque pellentesque risus ut odio.",
		img: "images/features/temp_icon.svg",
		id: 4
	},
	{
		title: "Nulla ac lacinia",
		description: "Molestie faucibus amet sed ut gravida iaculis sed venenatis. Pulvinar id lacus condimentum ut. Non.",
		img: "images/features/wind_icon.svg",
		id: 5
	},
	{
		title: "Velit nibh a",
		description: "Ac morbi integer orci justo lobortis elementum, massa pulvinar quisque. Porttitor sit convallis quis.",
		img: "images/features/zoomout_icon.svg",
		id: 6
	}
];

const renderFeature = (feature) => {
	return `
		<li class='card-item'>
			<article class="article-card">
				<picture>
					<img src="${feature.img}" alt="cloud-pic">
				</picture>
				<text-content>
					<h2 class="soft-voice">${feature.title}</h2>
					<p class="quiet-voice">${feature.description}</p>
				</text-content>
			</article>
		</li>
	`
};

const renderFeatures = (features) => {
	const featureListItems = document.getElementById('feature-card-list');
	featureListItems.innerHTML = features.map(renderFeature).join('');
};

renderFeatures(featureList);