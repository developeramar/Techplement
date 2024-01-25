<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

        .container-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh; /* Make container full height of the viewport */
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
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand center" href="#">TaskCraft</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"></div>
</nav>

<div class="container-center">
<h1>Thank You for Visiting!</h1>
    <p>We appreciate your time and presence on our website. Your support means a lot to us. If you have any questions or feedback, feel free to reach out. We hope to see you again soon!</p>
    <div class="text-danger" style="font-size: 80px;">&#10084;</div>
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary">Login Again</a>
        <a href="register.php" class="btn btn-secondary">Register Here</a>
    </div>
    
</div>

<footer>
    &copy; 2024 TaskCraft. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
