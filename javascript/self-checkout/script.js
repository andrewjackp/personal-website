// item = {price: price, quantity: quantity}
// subtotal = each quantity * price
// tax rate = 5.5%
// total = tax rate + subtotal

class SelfCheckout {

	constructor(id, content) {
		this.id = id;
		this.content = content

		this.$form = document.querySelector('form');
		this.$input = document.querySelector('input').value;
		this.$outlet = document.querySelector('outlet');
	}

	render() {
		const { id, content} = this; 
	}
}

class SelfCheckoutApp {
	constructor(name) {
		this.name = name;
		this.items = [];
		this.count = 0;
	}

	print(note = "") {
		console.log(`${this.name.toUpperCase()}---${note}`)
	}

	add(content) {
		item = new SelfCheckout(this.count++, content);
		this.items = [...this.items, item];
		this.print(`Added ${content}`);
	}

	remove(index) {
		const filtered = items.filter(item => {
		return item.index != index;
	});
		items = [...filtered];
		console.log(filtered);
	}

	update(item, id) {
		items[id].item = item;
	};
}

var item = new SelfCheckoutApp("Checkout Items");
item.add("ravioli");
item.add("ratatouie");