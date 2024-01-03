<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Course List</title>

    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }

        .container {
            background-color: #000000;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background-color: #000000;
            border: 1px solid #333333;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #008080;
            /* Teal */
            color: #ffffff;
            border-bottom: 1px solid #333333;
        }

        .card-body {
            color: #c0c0c0;
        }

        .card-footer {
            background-color: #333333;
            border-top: 1px solid #333333;
            border-radius: 0 0 10px 10px;
        }

        .btn-primary {
            background-color: #008080;
            /* Teal */
            border-color: #008080;
        }

        .btn-like {
            display: inline-block;
            padding: 8px 16px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        /* Default button color */
        .btn-like {
            background-color: #F6CF0C;
            color: #000000;
            border: 1px solid yellow;
        }

        /* Hover effect */
        .btn-like:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: #ffffff;
        }

        @import "https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/dashboard.scss";

        body {
            background-color: #1b2431;
            color: #202020;
            font-family: "Montserrat", "Helvetica", "Open Sans", "Arial";
            font-size: 13px;
        }

        .navbar {
            background-color: #1b2431;
            margin-top:15px;
        }


        .logout-btn {
            background-color: #ff6347;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size:20px;    
        }

        .logout-btn:hover {
            background-color: #ff4d30;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><b>RBAC OAUTH 2.0</b></a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <button class="logout-btn" onclick="window.location.href='/logout';"><b>Log Out</b></a></button>
            </li>
        </ul>
    </nav>
    <div class="container mt-4">
        <h1 style="color: #ffffff;">Course List</h1>

        <div class="card">
            <div class="card-header">
                <h2 class="mb-0">
                    Introduction to Programming
                </h2>
            </div>
            <div class="card-body">
                This course covers the basics of programming languages such as Python and Java. It includes hands-on coding exercises and projects.
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Open</button>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2 class="mb-0">
                    Web Development Fundamentals
                </h2>
            </div>
            <div class="card-body">
                Learn the basics of web development, including HTML, CSS, and JavaScript. Build static and dynamic web pages with real-world projects.
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Open</button>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2 class="mb-0">
                    Data Science Essentials
                </h2>
            </div>
            <div class="card-body">
                Explore the fundamental concepts of data science, including data analysis, visualization, and machine learning.
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Open</button>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2 class="mb-0">
                    Machine Learning Basics
                </h2>
            </div>
            <div class="card-body">
                Gain an understanding of basic machine learning concepts and algorithms. Implement machine learning models in practical scenarios.
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Open</button>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2 class="mb-0">
                    Mobile App Development
                </h2>
            </div>
            <div class="card-body">
                Learn the essentials of mobile app development, including both Android and iOS platforms. Build interactive and user-friendly mobile applications.
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Open</button>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!--  <div class="container">
        <a href="\logout" class="btn-like">Logout</a>
    </div>-->
</body>

</html>