<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>  
<body>
    <nav class="navbar navbar-expand-md" style="background-color: rgb(0,0,0,0.5);">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Employee Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-outline-warning me-2 mb-2" href="register.php" style="width: 90px;">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-warning" href="login.php" style="width: 90px;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center text-white mt-5">
        <h1>Welcome to Employee Management System</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus cum totam commodi iusto laborum, repudiandae quaerat quo fuga, vitae optio hic beatae dolorum perspiciatis a natus quis nesciunt voluptas cumque.</p>
        <div class="mt-3">
            <a href="login.php" class="btn btn-outline-light me-2">Login</a>
            <a href="register.php" class="btn btn-outline-light">Register</a>
        </div>
    </div>

</body>
</html>
