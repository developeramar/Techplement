<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Custom styles for the navbar */
        .navbar {
            background-color: #343a40; /* Dark background color */
        }

        .navbar-brand {
            color: #ffffff !important; /* White text color */
            font-weight: bold;
            margin-left: 100px;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important; /* White text color */
            margin: 0 15px;
        }

        .navbar-toggler-icon {
            background-color: #ffffff; /* White color for the toggler icon */
        }

        .navbar-toggler {
            border-color: #ffffff; /* White border color for the toggler */
        }
        footer {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* White text color */
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
  </head>
  <body>
    
    <!-- Signup Form -->

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand center" href="#">TaskCraft</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>


<div class="container ">
        <div class="row ">
            <div class="col-md-6 offset-md-3 mt-5   ">
                <h1 class="d-flex justify-content-center bg-primary text-white  ">SIGNUP FORM</h1>

                <form method="post" action="assets/backend/auth.php" class="border rounded p-4 border-primary login-form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="mb-3">
                        <label for="c_password" class="form-label">Confirm Password</label>
                        <input type="text" class="form-control" id="c_password" name="c_password" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" id="signup-btn" name="signup-btn" class="btn btn-primary d-flex justify-content-center">Sign Up</button>
                </form>
                <div class="d-flex justify-content-center">
                    Already have an account ?? <a href="index.php"> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Signup Form -->
    <footer>
    &copy; 2024 TaskCraft. All rights reserved.
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>