import { renderList } from "../components/article-list.js";
import { listData } from "../data/stories.js";

export function renderHome() {
	const app = document.querySelector("#app");
	app.innerHTML = renderList(listData);
}