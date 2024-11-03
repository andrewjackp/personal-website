import { users } from "../data/users.js";
import db from "../global/database.js";

function getCurrentUser() {
	db.retrieve(db.user)
}

function signIn(name) {
	const found = users.find(u => u.username === name);
	if(found) {
		db.save("user", name);
	} else {
		alert("user not found");
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
	signIn
}
