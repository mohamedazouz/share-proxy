<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'headers.php';

$oauth_token=$_GET["oauth_token"];
$oauth_token_secret=$_GET["oauth_token_secret"];
$status=$_GET["status"];
$link=$_GET["link"];

$Twitter = new EpiTwitter($consumerKey, $consumerSecret,$oauth_token, $oauth_token_secret);
$Twitter->post('/statuses/update.json', array('status' => $status." ".$link));

?>
