function signupvalidation(){
	var name = document.getElementById('fname').value;
	var email = document.getElementById('femail').value;
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	var status =true;
	//alert(name + email + pass1 + pass2);
	
	if(name == ""){
		status = false;
		document.getElementById('nameErr').innerHTML = "Name field is required!";
	}else{
		
	}

	if(email == ""){
		status = false;
		document.getElementById('emailErr').innerHTML = "Email field is required!";
	}else{

		        /*var email = document.getElementById('femail').value;
		        alert(email);
		        var xhttp = new XMLHttpRequest();
		        xhttp.onreadystatechange = function() {
		          if (this.readyState == 4 && this.status == 200) {
		             fetchdata = this.responseText;
		             resultdata = JSON.parse(fetchdata);
		           document.getElementById("emailErr").innerHTML = resultdata[0].email;
		          }
		        };
		        xhttp.open("GET", "controller.php?signupemail="+email, true);
		        xhttp.send();*/
	}

	if(pass1 == "" ){
		status = false;
		document.getElementById('pass1Err').innerHTML = "Password field is required!";
	}else{

	}

	if(pass2 == "" ){
		status = false;
		document.getElementById('pass2Err').innerHTML = "Re-Password field is required!";
	}else{

	}

	if(pass1 != pass2){
		status = false;
		document.getElementById('pass2Err').innerHTML = "Both passwords are not matching";
	}else{

	}


	return status;
}