<?php

include 'headers.php';


$Twitter = new EpiTwitter($consumerKey, $consumerSecret);
if (isset($_GET['oauth_token']) || (isset($_COOKIE['oauth_token']) && isset($_COOKIE['oauth_token_secret']))) {
    $Twitter->setToken($_GET['oauth_token']);
    $token = $Twitter->getAccessToken();

    $Twitter->setToken($token->oauth_token, $token->oauth_token_secret);


    
    $user = $Twitter->get_accountVerify_credentials();
  


    $json = array();
    $json['oauth_token'] = $token->oauth_token;
    $json['oauth_token_secret']= $token->oauth_token_secret;
    $json['screen_name']=$user->screen_name;
    $json['profile_image_url']= $user->profile_image_url;
    
    session_start();
    $_SESSION['twitter_token'] = json_encode($json); // store session data
    echo "thanks for your our application !! :P ";

    //$status = $Twitter->post('/statuses/update.json', array('status' => 'This a simple test from twitter-async at ' . date('m-d-Y h:i:s')));
}
?>
