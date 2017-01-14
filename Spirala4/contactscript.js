    //getting all input text fields
	var username = document.forms["form1"]["name"];
	var email = document.forms["form1"]["email"];
	var tel = document.forms["form1"]["tel"];
	var message = document.forms["form1"]["text"];
	
	// getting all error objects
	var name_error = document.getElementById("name-error");
	var email_error = document.getElementById("email-error");
	var tel_error = document.getElementById("tel-error");
	var message_error = document.getElementById("message-error");
	
	// setting all event listeners
	username.addEventListener("blur", nameVerify, true);
	email.addEventListener("blur", emailVerify, true);
	tel.addEventListener("blur", telVerify, true);

	
	function Validate(){
		
		var telefonRegEx = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{3})$/;
		
        //validate name
		if(username.value == ""){
			name_error.textContent = "Name is required!";
			username.style.border = "1px solid red";
			username.focus();
			return false;
		}
		if(username.value.length < 3){
			name_error.textContent = "Name must be at least 3 characters long!";
			username.style.border = "1px solid red";
			username.focus();
			return false;
		}
        //validate email
		if(email.value == ""){
			email_error.textContent = "Email is required!";
			email.style.border = "1px solid red";
			email.focus();
			return false;
	    }
	    //validate phone
	    if(tel.value == ""){
			tel_error.textContent = "Telephone is required!";
			tel.style.border = "1px solid red";
			tel.focus();
			return false;
	    }
		if(!telefonRegEx.test(tel.value)){
			tel_error.textContent = "Telephone format: (061)-123-345 or 061-123-456 or 061123456";
			tel.style.border = "1px solid red";
			tel.focus();
			return false;
	    }
	    //validate message
	    if(message.value == ""){
			message_error.textContent = "Message is required!";
			message.style.border = "1px solid red";
			message.focus();
			return false;
	}
	    if(message.value.length < 8 ){
			message_error.textContent = "Message must be at least 8 characters long!";
			message.style.border = "1px solid red";
			message.focus();
			return false;
	}
	}
	
	// ADD EVENT LISTENERS
	function nameVerify(){
		if (username.value != "") {
			name_error.innerHTML = "";
			username.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function emailVerify(){
		if (email.value != "") {
			email_error.innerHTML = "";
			email.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function telVerify(){
		if (tel.value != "") {
			tel_error.innerHTML = "";
			tel.style.border = "1px solid #110E0F";
			return true;
		}
	}
