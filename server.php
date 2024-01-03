<?php


// -----------------Configure an instance of the Auth0 PHP SDK for our sample application-----------------
// import accessTokenVerifier
require_once 'src/tokenVerifier.php';

// Import the Composer Autoloader to make the SDK classes accessible:
require_once 'vendor/autoload.php';

// Load our environment variables from the .env file:
(Dotenv\Dotenv::createImmutable(__DIR__))->load();

// Now instantiate the Auth0 class with our configuration:

use Auth0\SDK\Auth0;
use Auth0\SDK\Configuration\SdkConfiguration;

$configuration = new SdkConfiguration(
  strategy: SdkConfiguration::STRATEGY_REGULAR,
  domain: $_ENV['AUTH0_DOMAIN'],
  clientId: $_ENV['AUTH0_CLIENT_ID'],
  clientSecret: $_ENV['AUTH0_CLIENT_SECRET'],
  redirectUri: 'http://' . $_SERVER['HTTP_HOST'] . '/callback',
  cookieSecret: $_ENV['AUTH0_COOKIE_SECRET'],
  audience:['auth_api']
);

$sdk = new Auth0($configuration);


// -----------------Setting Up Auth0 Route-----------------

// import our router library:
use Steampixel\Route;
// use GuzzleHttp\Client;


// Define route constants:ROUTE_URL_INDEX
define('ROUTE_URL_INDEX', rtrim($_ENV['AUTH0_BASE_URL'], '/'));
define('ROUTE_URL_LOGIN', ROUTE_URL_INDEX . '/login');
define('ROUTE_URL_CALLBACK', ROUTE_URL_INDEX . '/callback');
define('ROUTE_URL_LOGOUT', ROUTE_URL_INDEX . '/logout');


// Application's Auth0 route handling logic, and the SDK integrations:
/*
Checking for a session:
-----------------------
The Auth0 PHP SDK has a convenient method for checking if our user has authenticated and returned 
their profile, getCredentials(). Let's install this on our index route to print the user profile 
if they're logged in or report that they need to login.
*/
Route::add('/', function() use ($sdk) {
    $session = $sdk->getCredentials();
    // echo $session->idToken;
    // echo "</br></br>".$session->accessToken;
    // echo "</br></br>";
  
    // var_dump($session->accessTokenScope);

    if ($session === null) {
      // The user isn't logged in.
        require 'src/login.php';
      return;
    }

    // The user is logged in.
    require "src/home.php";
    /*$response=verifyToken($session,$sdk);
    // Link to auth0 admin page 
    if(in_array("manage_role",$response)){
      echo ('<button class="logout-btn" onclick="window.location.href=\'https:\/\/accounts.auth0.com/teams/team-39cjlcj/tenants\';"><b>Go To Dashboard</b></button>');
    }*/

    exit;
    
  });

// admin
Route::add('/manage_role', function() use ($sdk) {
    $session = $sdk->getCredentials();

    if($session==NULL){
            header("Location:/");
      exit;
    }
    $response=verifyToken($session,$sdk);
    // var_dump($response);
    if(in_array("manage_role",$response)){
      header("Location:https://accounts.auth0.com/teams/team-39cjlcj/tenants");
    }else{
      // header("HTTP/1.1 401 Unauthorized");
      require("src/error401.php");
    }
    exit;
});


// instructor
Route::add('/list_courses', function() use ($sdk) {
  $session = $sdk->getCredentials();
  
  if($session==NULL){
            header("Location:/");
    exit;
  }
  $response=verifyToken($session,$sdk);
  if(in_array("list_courses",$response)){
    require("src/listCourses.php");
  }else{
    // header("HTTP/1.1 401 Unauthorized");
    require("src/error401.php");
  }
  exit;
});

Route::add('/submit_assignment', function() use ($sdk) {
  $session = $sdk->getCredentials();

  
  if($session==NULL){
          header("Location:/");
    exit;
  }
  $response=verifyToken($session,$sdk);
  // var_dump($response);
  if(in_array("submit_assignment",$response)){
    // echo "Hello";
    require("src/submit_assignment.php");
  }else{
    // header("HTTP/1.1 401 Unauthorized");
    require("src/error401.php");
  }
  exit;
});

// evaluate
Route::add('/evaluate_assignment', function() use ($sdk) {
  $session = $sdk->getCredentials();


  if($session==NULL){
          header("Location:/");
    exit;
  }
  $response=verifyToken($session,$sdk);
  // var_dump($response);
  if(in_array("evaluate_assignment",$response)){
    require "src/evaluateAssignment.php";

    // require("listCourses.php");
  }else{
    // header("HTTP/1.1 401 Unauthorized");
    require("src/error401.php");
  }
  exit;
});
/*
Logging in:
-----------
Now let's create our /login route, which will use the Auth0 PHP SDK's login() method 
to set up the user session and return a customized URL to Auth0's Universal Login 
Page for this user to login.
*/
Route::add('/login', function() use ($sdk) {
    // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, should they hit network issues or other problems that interrupt a previous login process:
    $sdk->clear();

    // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
    header("Location: " . $sdk->login());
    exit;
});


// Handling authentication callback
Route::add('/callback', function() use ($sdk) {
    // Have the SDK complete the authentication flow:
    $sdk->exchange(ROUTE_URL_CALLBACK);

    // Finally, redirect our end user back to the / index route, to display their user profile:
    header("Location: " . ROUTE_URL_INDEX);
    exit;
});

// Logging Out
Route::add('/logout', function() use ($sdk) {
    // Clear the user's local session with our app, then redirect them to the Auth0 logout endpoint to clear their Auth0 session.
    header("Location: " . $sdk->logout(ROUTE_URL_INDEX));
    exit;
});

// -----------------RUN YOUR APP-----------------

/*
This tells our router that we've finished configuring our routes, 
and we're ready to begin routing incoming HTTP requests:
*/
Route::run('/');


?>