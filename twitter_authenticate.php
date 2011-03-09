<?php

include 'lib/keys.php';
include 'lib/EpiCurl.php';
include 'lib/EpiOAuth.php';
include 'lib/EpiTwitter.php';


$Twitter = new EpiTwitter($consumerKey, $consumerSecret);
if (isset($_GET['oauth_token']) || (isset($_COOKIE['oauth_token']) && isset($_COOKIE['oauth_token_secret']))) {
    $Twitter->setToken($_GET['oauth_token']);
    $token = $Twitter->getAccessToken();

    $Twitter->setToken($token->oauth_token, $token->oauth_token_secret);
    echo $token->oauth_token . " <------->   " . $token->oauth_token_secret;
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

    //$status = $Twitter->post('/statuses/update.json', array('status' => 'This a simple test from twitter-async at ' . date('m-d-Y h:i:s')));
}
?>
