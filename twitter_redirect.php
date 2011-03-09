<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'headers.php';
$Twitter = new EpiTwitter($consumerKey, $consumerSecret);
header('Location:'. $Twitter->getAuthenticateUrl());
?>
