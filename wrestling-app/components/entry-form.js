function renderForm() {
	return `
		<form id="user-form" data-form="user-form">
  			<label for="username">Username:</label>
  			<input type="text" id="username" name="username">

  			<button type="submit" id="sign-in-btn">Enter</button>
		</form>
	`;
}

export {
	renderForm
};