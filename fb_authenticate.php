<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$app_id = "148794918520679"; //"185034264867265";
$app_secret = "d9dc7b2a54e7e973b67bea56eeaafa0a"; // "bfcd37f48bbc2605c654027d59780660";
$my_url = "http://local.activedd.com/azouz/fb_authenticate.php?code";

$code = $_REQUEST["code"];

/*  if(empty($code)) {
  $dialog_url = "http://www.facebook.com/dialog/oauth?client_id="
  . $app_id . "&redirect_uri=" . urlencode($my_url);

  echo("<script> top.location.href='" . $dialog_url . "'</script>");
  }
 */
$token_url = "https://graph.facebook.com/oauth/access_token?client_id="
        . $app_id . "&redirect_uri=" . urlencode($my_url) . "&client_secret="
        . $app_secret . "&code=" . $code;


$access_token = file_get_contents($token_url);

$temp = split("=", $access_token);


$json = array();
$json['access_token'] = $temp[1];

session_start();
$_SESSION['access_token'] = json_encode($json); // store session data
echo "Thanks , permission accepted successfully , and close it automatically after that"
?>

<script>
    setTimeout("window.close()", 2*1000);
</script>

