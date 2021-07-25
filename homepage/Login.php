<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
	<body>
	<section id="header">
    <div class="header container">
		<div class="nav-bar">
		<div class="brand">
        <a><h1>Pro<span>v</span>id</h1></a>
        </div>
		</div>
    </div>
	</section>
	<div class="contrainer">
	<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
				<label>Username <span style="color:white";>*</span></label>
				<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Password <span style="color:white";>*</span></label>
				<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		
		<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				<div class="form-group">
				<label>Username <span style="color:red";>*</span></label>
				<input type="text" name="username" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Email ID <span style="color:red";>*</span></label>
				<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Password <span style="color:red";>*</span></label>
				<input type="password" name="password1" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Re-enter Password <span style="color:red";>*</span></label>
				<input type="password" name="password2" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		</div>
	</div>
	</body>
</html>