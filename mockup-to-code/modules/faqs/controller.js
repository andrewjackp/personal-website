const faqList = [
	{ question: "How Soon Will My Order Ship?", 
	 	answer: "ASAP"
	},
	{ question: "Is There Any Warranty Exclusions", 
	 	answer: "Elementum ullamcorper felis nulla scelerisque. Nunc enim nunc mattis leo massa."
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
		<h3>${faq.question}</h3>
		<button>></button>
		<p class="quiet-voice">${faq.answer}</p>
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
// }

renderFaqList(faqList);
console.log("FAQS");