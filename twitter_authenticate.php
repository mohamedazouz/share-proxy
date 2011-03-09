<?php

include 'test/keys.php';
include 'test/EpiCurl.php';
include 'test/EpiOAuth.php';
include 'test/EpiTwitter.php';

//echo $consumerKey. "= > ". $consumerSecret;
$Twitter = new EpiTwitter($consumerKey, $consumerSecret);

if (isset($_GET['oauth_token']) || (isset($_COOKIE['oauth_token']) && isset($_COOKIE['oauth_token_secret']))) {
    $Twitter->setToken($_GET['oauth_token']);
    $token = $Twitter->getAccessToken();
    
    $Twitter->setToken($token->oauth_token, $token->oauth_token_secret);
    echo $token->oauth_token. " <------->   ". $token->oauth_token_secret;
    $user = $Twitter->get_accountVerify_credentials();
    echo "
	<p>
	Username: <br />
	<strong>{$user->screen_name}</strong><br />
	Profile Image:<br/>
	<img src=\"{$user->profile_image_url}\"><br />
	Last Tweet: <br />
	<strong>{$user->status->text}</strong><br/>

	</p>";
} elseif (isset($_GET['denied'])) {
    echo 'You must sign in through twitter first';
} else {
    echo 'You are not logged in';
}
?>
