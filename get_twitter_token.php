<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
echo "Pageviews = " . $_SESSION['twitter_token'];
unset($_SESSION['twitter_token']);
?>
