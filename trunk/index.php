<?php
include 'lib/keys.php';
include 'lib/EpiCurl.php';
include 'lib/EpiOAuth.php';
include 'lib/EpiTwitter.php';

/*include 'test/keys.php';
include 'test/EpiCurl.php';
include 'test/EpiOAuth.php';
include 'test/EpiTwitter.php';*/

echo "hi";

$Twitter = new EpiTwitter($consumerKey, $consumerSecret);

echo '<a href="' . $Twitter->getAuthenticateUrl() . '">
   get your access token twitter
</a>';
?>
<a href="https://www.facebook.com/dialog/oauth?client_id=185034264867265&redirect_uri=http://local.activedd.com/azouz/fb_authenticate.php?code&scope=publish_stream,offline_access" > get your access token from facebook</a>
