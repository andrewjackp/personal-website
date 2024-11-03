import { users } from "../data/users.js";
import db from "../global/database.js";

let homeBtn = null;
homeBtn = document.querySelector('#home-btn');


function getCurrentUser() {
	db.retrieve(db.user)
}

export function isSignedIn() {
	return getCurrentUser();
}

function signIn(name) {
	const found = users.find(u => u.username === name);
	if(found) {
		db.save("user", name);
	} else {
		alert("user not found");
	}
	
}

export function handleSignIn() {
	var username = document.querySelector("#username");

	

	if( signIn(username.value)){
		
		homeBtn.textContent = `Hello ${username.value}`;
		console.log(homeBtn)
	}
}

//user.signUp

//user.signIn
//user.isSignedIn
//user.getCurrentUser

//user.signOut

//user.

//user.addComment
	//user.replyToComment

export default {
	signIn,
	handleSignIn
}
