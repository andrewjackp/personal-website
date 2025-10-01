document.querySelectorAll(".toggle-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const card = e.target.closest(".review-card");
        const desc = card.querySelector(".description");
        const isExpanded = btn.getAttribute("data-expanded") === "true";

        if (!isExpanded) {
            desc.style.whiteSpace = "normal";
            btn.textContent = "Read Less";
            btn.setAttribute("data-expanded", "true");
        } else {
            desc.style.whiteSpace = "nowrap";
            btn.textContent = "Read More";
            btn.setAttribute("data-expanded", "false");
        }
    });
});