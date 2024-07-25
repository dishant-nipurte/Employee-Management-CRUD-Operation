<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
</head>  
  <body>
	  <div class="mx-auto rounded text-white"
	  style="background-color: rgb(0,0,0,0.5); height: 370px; width: 390px; margin: 60px;">
	  <h3 class="px-3 pt-3">Sign In</h3>
	  <hr>

	  <form class="px-3 py-1" onsubmit="return fun()">
		<div class="input-group mb-3">
			<span class="input-group-text bg-warning border border-warning" style="width: 50px;">
			<i class="fas fa-user"></i>
			</span>
			<input type="email" class="form-control" placeholder="Username" id="username" name="username">
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text bg-warning border border-warning" style="width: 50px;">
			<i class="fas fa-key"></i>
			</span>
			<input type="password" class="form-control" placeholder="Password" id="password" name="password">
		</div>
		
		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="remember">
			<label class="form-check-label" for="flexCheckDefault">Remember Me</label>
		</div>

		<div class="d-flex justify-content-end">
			<button type="submit" class="btn btn-warning" style="width: 100px;" onclick="fun()">Login</button>
		</div>

	  </form>
	  <br>
	  <div class="text-center">
		Don't have an account ? <a href="register.php" class="text-decoration-none">Register</a><br>
		<a href="forgot_pass.php" class="text-decoration-none">Forgot your password ?</a>
	  </div>
	  </div>
	  
	  <script>
		function fun(){
			var email = document.getElementById("username").value;
			var pass = document.getElementById("password").value;
			if(email == 'admin111@gmail.com' && pass == '1234'){
					alert('successful login !')
					window.location.href = "employee_detail.php";
					return false;
				}
				else{
					alert('Invalid detail');
					return false;
				}
			}
	</script>
  </body>
</html>
