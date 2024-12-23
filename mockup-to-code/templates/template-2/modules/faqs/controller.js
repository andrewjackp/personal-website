const faqList = [
	{ question: "How Soon Will My Order Ship?", 
	 	answer: "ASAP"
	},
	{ question: "Is There Any Warranty Exclusions", 
	 	answer: "Venenatis, fames a a, in. Morbi pellentesque lacus, purus in tristique justo, pretium egestas. Commodo leo nisl consectetur nisi, tortor, erat sit at aliquet. Ultrices in aliquam maecenas cursus. Sed enim cursus augue quis risus. Ac donec quisque vitae feugiat dignissim diam."
	},
	{ question: "Are There Any Return Exclusions", 
	 	answer: "Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc mattis leo massa."
	},
	{ question: "Will I be charged for a replacement item?", 
	 	answer: "Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc mattis leo massa."
	},
	{ question: "Will I be charged for a replacement item?", 
	 	answer: "Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc mattis leo massa."
	},
	{
		question: "How can I track my orders & payment?",
		answer: "Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc mattis leo massa."
	}
];

const renderFaq = (faq) => {
	return `
		<article class='faq-card'>
		<details>
			<summary>${faq.question}</summary>
			<p class="quiet-voice">${faq.answer}</p>
		</details>
		</article>
	`
}

const renderFaqList = (faqs) =>{
	const template = document.getElementById("faq-list");
	template.innerHTML = faqs.map(renderFaq).join('');
}

// function renderFaqList (list){
// 	let template = "<ul id='faq-list'>";
// 	list.forEach((faq) => {
// 		template += renderFaq;
// 	});
// 		template += "</ul>";
//			retyrn template;
// }

renderFaqList(faqList);
console.log("FAQS");