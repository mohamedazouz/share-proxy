

<!--<a href="http://local.activedd.com/azouz/twitter_authenticate.php" > get your twitter</a>--->

<!--<a href="https://www.facebook.com/dialog/oauth?client_id=185034264867265&redirect_uri=http://local.activedd.com/azouz/fb_authenticate.php?code&scope=publish_stream,offline_access" > get your access token</a>-->


<?php
include 'test/keys.php';
include 'test/EpiCurl.php';
include 'test/EpiOAuth.php';
include 'test/EpiTwitter.php';

$Twitter = new EpiTwitter($consumerKey, $consumerSecret);

echo '<a href="' . $Twitter->getAuthenticateUrl() . '">
    sign in
</a>';
?>

