
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="signupvalidator.js"></script>
    <style>
    	form{
    		padding-top:  10px;
    	}
    </style>
 
</head>
<body>
<div class="row">
	<div class="col-sm-3"></div>
	
	<div class="col-sm-6">
		<form action="logincontroller.php" method="POST" onsubmit="return signupvalidation()">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<label>Name</label>
					</div>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name">
						<p id="nameErr"></p>
					</div>
				</div>
			</div>
			

			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<label>Email</label>
					</div>
					<div class="col-sm-9">
						<input type="text" name="femail" id="femail" class="form-control" placeholder="Enter your Email ID">
						<p id="emailErr"></p>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<label>Password</label>
					</div>
					<div class="col-sm-9">
						<input type="Password" name="pass1" id="pass1" class="form-control" placeholder="Enter your password">
						<p id="pass1Err"></p>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<label>Re-Password</label>
					</div>
					<div class="col-sm-9">
						<input type="password" name="pass2" id="pass2" class="form-control" placeholder="Re-enter your password">
						<p id="pass2Err"></p>
					</div>
				</div>
			</div>


			<div class="form-group">
				<div class="row">
					<div class="col-sm-3">
						<img src="captcha.php" class="">
					</div>
					<div class="col-sm-3">
						<input type="text" name="captcha_code" class="form-control">
					</div>
				</div>
			</div> 

			<div class="form-group">
				<div class="row">
					<div class="col-sm-12 text-center">
						<button type="submit"  class="btn btn-primary">Sign Up</button>	
					</div>
				</div>
			</div>

			<div class="form-group">
            <div class="row">
              <div class="col-sm-12 text-center">
                  <input type="hidden" name="studentForm" value="signUp">
              </div>
            </div>
          </div>



		</form>	
	</div>
	
	<div class="col-sm-3"></div>
</div>
</body>
</html>


