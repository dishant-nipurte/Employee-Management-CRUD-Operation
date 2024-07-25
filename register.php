<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>  
<body>

  <div class="mx-auto rounded text-white" style="background-color: rgba(0,0,0,0.5); height:auto ; width: 390px; margin: 60px; padding: 30px;">
    <h3 class="px-3 pt-3">Register</h3>
    <hr>

    <form class="px-3 py-1">
      <div class="input-group mb-3">
        <span class="input-group-text bg-warning border border-warning" style="width: 50px;">
          <i class="fas fa-user"></i>
        </span>
        <input type="text" class="form-control" placeholder="Username" name="username">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text bg-warning border border-warning" style="width: 50px;">
          <i class="fas fa-envelope"></i>
        </span>
        <input type="email" class="form-control" placeholder="Email" name="email">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text bg-warning border border-warning" style="width: 50px;">
          <i class="fas fa-key"></i>
        </span>
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text bg-warning border border-warning" style="width: 50px;">
          <i class="fas fa-key"></i>
        </span>
        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
      </div>

      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-warning" style="width: 100px;">Register</button>
      </div>
        <div class="d-flex justify-content-center" >
          <a href="home.php" type="submit" class="btn btn-warning" style="width: 100px;margin-top: 35px;">Back to Home </a>     
      </div>

    </form>
    <br>
    <div class="text-center">
      Already have an account? <a href="login.php" class="text-decoration-none">Login</a>
    </div>    
  </div>

  <script>
   </script>
</body>
</html>
