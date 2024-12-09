var dataItems = [
    {
        teaser: "Magazine",
        title: "Destination Eames: Cranbrook",
        description: "The epic story of Ray and Charles Eames begins in a place that shaped their design sensibility that now preserves their work and other iconic designs"
    },
    {
        teaser: "Magazine",
        title: "Design Q&A: Shigeru Ban",
        description: "Whether designing high-end residencies, cultural venues, or humanitarian housing, Shigeru Ban has one main muse: his heart."
    },
    {
        teaser: "Eames Ranch",
        title: "A Living Laboratory",
        description: "The practices of design and regenerative agriculture are integrated on our working farm to build a better world for tomorrow."
    },
];

console.log("layout-garden, eames-institute module");

const renderItem = (item) => {
            return `
                <li class='eames-card-item'>
                    <article class="eames-card">
                        <picture>
                            <img src="https://peprojects.dev/images/landscape.jpg" alt="">
                        </picture>
                        <text-content>
                            <span class="quiet-voice">${item.teaser}</span>
                            <h2 class="loud-voice">${item.title}</h2>
                            <p class="mid-voice">${item.description}</p>
                        </text-content>
                    </article>
                </li>
            `;
        };

// Function to render all items
    const renderItems = (items) => {
        const cardList = document.getElementById('eames-card-list');
        cardList.innerHTML = items.map(renderItem).join('');
    };

// Initial render
renderItems(dataItems);