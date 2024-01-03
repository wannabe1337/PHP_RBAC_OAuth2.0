<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f0f0f0;
        }

        .container {
            margin-top: 100px;
            max-width: 500px;
        }

        .btn-primary {
            background-color: #ff6347;
            border: none;
            font-size:20px;
        }

        .btn-primary:hover {
            background-color: #ff4d30;
        }
        body {
            background-image: url('https://supertokens.com/covers/what-is-rbac-cover.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        body {
            background-color: #1b2431;
            color: #202020;
            font-family: "Montserrat", "Helvetica", "Open Sans", "Arial";
            font-size: 13px;
        }

        .navbar {
            /* background-color: #1b2431; */
            margin-top:15px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><b>RBAC OAUTH 2.0</b></a>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <button onclick="window.location.href='/login';" class="btn btn-primary btn-block"><b>Login</b></button>
            </div>
        </div>
    </div>
</body>
</html>