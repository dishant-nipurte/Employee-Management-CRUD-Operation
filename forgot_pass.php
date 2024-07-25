<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>  
<body>

<div class="mx-auto rounded text-white"
     style="background-color: rgb(0,0,0,0.5); height: 370px; width: 390px; margin: 60px;">
    <h3 class="px-3 pt-3">Forgot Password</h3>
    <hr>

    <form class="px-3 py-1">
        <div class="input-group mb-3">
            <span class="input-group-text bg-warning border border-warning" style="width: 50px;">
                <i class="fas fa-envelope"></i>
            </span>
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-warning" style="width: 150px;">Reset Password</button>
        </div>
    </form>
    <br>
    <div class="text-center">
        Remembered your password? <a href="login.php" class="text-decoration-none">Login</a><br>
        Don't have an account? <a href="register.php" class="text-decoration-none">Register</a>
    </div>
</div>

</body>
</html>
