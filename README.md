# Project Concept :
This web app demonstrates **RBAC** using **OAuth2.0**. The web app showcases an online learning platform scenario.

For the demonstration purpose, we have considered only three roles as follows:

1. Instructor
2. Student
3. Admin
    
The permissions assigned to these roles are as follows:

|Roles|Permissions|
|-----|-----------|
|Instructor|List-Courses, Evaluate-Assignment|
|Student|List-Course, Submit-Assignment|
|Admin  |Manage-Role|


# File Hierarchy :
### server.php
This is a server file that handles all the routes of the application. We have created one route for each permission available in the web app and some other routes for authentication flow.

### .env
This is an environment file containing all the environment variables used in the application.

### src directory
The src directory contains all the frontend files related to applications.

### vendor directory
The vendor directory contains all the Auth0 SDK files and other support files.

# Application Work Flow:
1. Whenever a user tries to visit any route, the route handler checks for the session and if the session is not set then the user is redirected to the **Login** page.

2. If the session is set the route handler extracts the access token, verifies the token, and checks the permission for the requested route. 

3. If the requested route is allowed the user will be able to get the web page otherwise the user will be redirected to the **Error401** page.


# To Re-Create the project :

### Execute
    php -S 127.0.0.1:3000 server.php

### Go to 
    127.0.0.1:3000

### User's Credentials
|E-mail|Password|Role|
|--------|--------|---|
|user1@myapp.com|user1@MYAPP|Instructor|
|user2@myapp.com|user1@MYAPP|Student|
|admin@myapp.com|secret|Admin|

### User-Role-Permission Management Dashboard
After logging in as admin the page will show a button Manage-Role which will redirect to the dashboard. Admin needs to log in again with the same email and password to manage the dashboard.

# Note:
All the web pages such as **Evaluate Assignment**, **List Courses**,  and **Submit Assignment** shown in this web app are static. We have created those pages just to show how the application is handling **Role-Based-Access-Control**.

