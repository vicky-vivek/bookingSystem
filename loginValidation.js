function loginvalidation(){
	//alert("k");
	var email = document.getElementById('femail').value; 
	var password = document.getElementById('password').value;
	var captcha = document.getElementById('captcha_code').value;
	var status = true;

	if(email == ""){
		status = false;
		document.getElementById('emailErr').innerHTML = "Email field is required";
	}else{

	}

	if(password == ""){
		status = false;
		document.getElementById('passErr').innerHTML = "Password field is required";
	}else{

	}

	if(captcha == ""){
		status = false;
		document.getElementById('captchaErr').innerHTML = "Captcha field is required";
	}else{

	}
	
	return status; 
}