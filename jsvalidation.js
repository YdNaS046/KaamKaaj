const form = document.getElementById("form");
const username = document.getElementById("Uname");
const email = document.getElementById("Email");
const password = document.getElementById("Password");
const password2 = document.getElementById("Repassword");

function validate(){
	const usernameValue = username.value.trim();
	const emailValue = email.username.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();

	if(usernameValue === ''){
		setErrorFor(username, "Username cannot be blank");
	}
	else {
		setSuccessFor(username);
	}

	if(usernameValue <3){
		setErrorFor(username, "Username cannot be blank");
	}
	else {
		setSuccessFor(username);
	}

	if(emailValue === ''){
		setErrorFor(email, "Email cannot be blank");
	}
	else {
		setSuccessFor(email);
	}

	if(passwordValue === ''){
		setErrorFor(password, "Password cannot be blank");
	}
	else {
		setSuccessFor(password);
	}

	if(passwordValue !=== password2Value){
		setErrorFor(password2, "Passwords must be matched");
	}
	else {
		setSuccessFor(password2);
	}

}


function setErrorFor(input,message){
	const formControl = input.parentElement;
	const small = formControl.querySelector("small");

	small.innerText = message;

	formControl.className = 'form-control error';



}


function setSuccessFor(input){
	const formControl = input.parentElement;
	formControl.className = 'form-control success'
}

function isEmail(email){

}