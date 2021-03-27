<div class="fluid-all">
	<div class="form_container">
		<form class="form_control" action="" method="" id="myDemo">
			<h1>Login</h1>
			<div class="label">*Log into your account</div>
			<i class="fa fa-user 3x"></i>
			<input type="email" name="name" placeholder="Your Email">
			<div class="error_message">
				Invalid Email or Phone input!
			</div>
		
			<!-- <div class="label">*Password</div> -->
		
			<i class="fa fa-user fa-lock locker 3x"></i>
			<input type="password" name="password" placeholder="Password">
			<div class="error_password">
				Invalid Password Input!
			</div>
			<div class="label forgot-label">Forgot Password?</div>
			<input type="submit" value="Login Now" name="submit">
		</form>

		<!-- Registration form Section -->

		<form class="form_control" action="" method="" id="myDemo2">
			<h1>Register</h1>
			<div class="label">*Register your account</div>
			<i class="fa fa-user 3x"></i>
			<input type="email" name="name" placeholder="Enter Valid Email">
			<div class="label">*Phone Number</div>
			<input type="number" name="name" placeholder="Enter Phone Number">
			<div class="error_message">
				Invalid Email or Phone input!
			</div>
		
			<div class="label">*Password</div>
			<i class="fa fa-user fa-lock locker 3x"></i>
			<input type="password" name="password" placeholder="Password">
			<div class="label">*Confirm Password</div>
			<input type="password" name="password" placeholder="Confirm Password">
			<div class="error_password">
				Invalid Password Input!
			</div>
			<div class="label forgot-label">
				<input type="checkbox" name="">Remember Password?
			</div>
			<input type="submit" value="Register" name="submit">
		</form>

		
		<!-- transparent button for login and register -->
		
		<div class="register-holder">
			<button onclick="showRegistrationForm()" id="myTextColor">Register</button>
			<button onclick="showLoginForm()">Login</button>
		</div>
	
	</div>

	<!-- left container -->

	<div class="form_container_left">
		<h1>WHO WE ARE</h1>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	
		</p>
		<a href="#"><button>Learn More</button></a>
	</div>
</div>