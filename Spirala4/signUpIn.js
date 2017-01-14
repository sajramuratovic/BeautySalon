    //Forma za login
	//getting all input text fields
	var username = document.forms["form1"]["username1"];
	var email = document.forms["form1"]["email1"];
	var password = document.forms["form1"]["password1"];
	
	// getting all error objects
	var name_error = document.getElementById("name_error1");
	var email_error = document.getElementById("email_error1");
	var password_error = document.getElementById("password_error1");
	
	// setting all event listeners
	username.addEventListener("blur", nameVerify1, true);
	email.addEventListener("blur", emailVerify1, true);
	
	function ValidateForm1(){
		// Validate username
		if(username.value == ""){
			name_error.textContent = "Username is required!";
			username.style.border = "1px solid red";
			username.focus();
			return false;
		}
		// Validate email
		if(email.value == ""){
			email_error.textContent = "Email is required!";
			email.style.border = "1px solid red";
			email.focus();
			return false;
		}
	    // Validate password
		if (password.value == "" ) {
			password_error.textContent = "Password is required!";
			password.style.border = "1px solid red";
			password.focus();
			return false;
		}
		if (password.value.length < 8 ) {
			password_error.textContent = "Password must be at least 8 characters long!";
			password.style.border = "1px solid red";
			password.focus();
			return false;
		}
	}
	// add event listeners
	function nameVerify1(){
		if (username.value != "") {
			name_error.innerHTML = "";
			username.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function emailVerify1(){
		if (email.value != "") {
			email_error.innerHTML = "";
			email.style.border = "1px solid #110E0F";
			return true;
		}
	}
	
	
    //Forma za register
	//getting all input text fields
	var username1 = document.forms["form2"]["username2"];
	var email1 = document.forms["form2"]["email2"];
	var password1 = document.forms["form2"]["password2"];
	var password_confirmation = document.forms["form2"]["password_confirmation"];
	
	// getting all error objects
	var name_error1 = document.getElementById("name_error2");
	var email_error1 = document.getElementById("email_error2");
	var password_error1 = document.getElementById("password_error2");
	
	// setting all event listeners
	username1.addEventListener("blur", nameVerify2, true);
	email1.addEventListener("blur", emailVerify2, true);
	
	function ValidateForm2(){
		// Validate username
		if(username1.value == ""){
			name_error1.textContent = "Username is required!";
			username1.style.border = "1px solid red";
			username1.focus();
			return false;
		}
		// Validate email
		if(email1.value == ""){
			email_error1.textContent = "Email is required!";
			email1.style.border = "1px solid red";
			email1.focus();
			return false;
		}
		//Validate password
		if (password1.value != password_confirmation.value) {
			password_error1.textContent = "The two passwords do not match!";
			password1.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password1.focus();
			return false;
		}

		
		// PASSWORD REQUIRED
		if (password1.value == "" || password_confirmation.value == "") {
			password_error1.textContent = "Password is required!";
			password1.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password1.focus();
			return false;
		}
		
				if (password1.value.length < 8 ) {
			password_error1.textContent = "Password must be at least 8 characters long!";
			password1.style.border = "1px solid red";
			password1.focus();
			return false;
		}
	}
	
	// add event listeners
	function nameVerify2(){
		if (username1.value != "") {
			name_error1.innerHTML = "";
			username1.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function emailVerify2(){
		if (email1.value != "") {
			email_error1.innerHTML = "";
			email1.style.border = "1px solid #110E0F";
			return true;
		}
	}