<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 10px;
}

.nav-left {
    display: flex;
    align-items: center;
    text-align:center;
    /* margin-left:20%; */
    /* margin-right:20%; */
}

.profile-photo {
    width: 75px;
    height: 75px;
    border-radius: 150%;
    margin-right: 10px;
    background-color: #ff6347;
    text-align:center;
    
}

.user-name {
    color: white;
    margin: 0;
}

.object-list {
    list-style-type: none;
    padding: 0;
}

.object-item {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    background:#008080;
    color:white;
    font-size:20px;
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


</style>

</head>
<body>
    
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><b>RBAC OAUTH 2.0</b></a>
    </nav>
    
    <header>
        <nav style="background:#a6838300" >
            <div class="nav-left" >
                <img src="<?php echo($session->user['picture'])?>" alt="Profile Photo" class="profile-photo">
                <h2 class="user-name">Welcome, <?php echo($session->user['nickname'])  ?></h2>
            </div>
            <div class="nav-right">
                <button class="logout-btn" onclick="window.location.href='/logout';"><b>Log Out</b></a></button>
            </div>
        </nav>
    </header>
    <main>
        <h3 style="color:white;">Allowed Permissions:</h3>
        <ul class="object-list">
            <?php
            $token=$sdk->decode($session->accessToken);
            $tokenArray=$token->toArray();
            foreach ($tokenArray['permissions'] as $permission){
                $link=$permission;
                // Split the string into words using the separator "_"
                $words = explode('_', $permission);

                // Capitalize the first letter of each word in the resulting array
                $words = array_map('ucwords', $words);

                // Join the array elements back into a string using the separator "_"
                $permission = implode(' ', $words);
                echo("<div class='container'><li class='object-item'><button class='logout-btn' style='background:transparent' onclick='window.location.href=\"".$link."\"'><b>$permission</b></button></li></div>");
            }
            ?>
        </ul>
    </main>
    <script src="scripts.js"></script>
</body>
</html>