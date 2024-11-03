function save(key, thing) {
	localStorage.setItem(key, JSON.stringify(thing));
}

function retrieve(thing) {
	return JSON.parse(localStorage.getItem(thing));
}

export default {
	save,
	retrieve
}