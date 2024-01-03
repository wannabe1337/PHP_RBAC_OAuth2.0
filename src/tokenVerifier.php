<?php
    function verifyToken($session,$sdk){
        $session = $sdk->getCredentials();
        $token=$sdk->decode($session->accessToken);
        // $response=verifyToken($jwt,$sdk);
        try{
          // token verification and validation
          $token->verify();
          $token->validate();
        }catch(Exception $e){
          echo "Invalid Token.".$e;
          return NULL;
        }
        $tokenArray=$token->toArray();
        return $tokenArray['permissions'];
    }
?>