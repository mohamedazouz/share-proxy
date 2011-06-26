<?php

$json = array();
if (isset($_GET['to']) && $_GET['to'] != '' && $_GET['from'] != '' && isset($_GET['from'])&& isset($_GET['msg']) && isset($_GET['su'])) {
    $to = $_GET['to'];
    $subject = $_GET['su'];
    $message = $_GET['msg'];
    $headers = 'From: '.$_GET['from'];

    if (mail($to, $subject, $message, $headers)) {
        $json["status"] = '200';
        $json["message"] = 'OK';
    } else {
        $json["status"] = '417';
        $json["message"] = 'Exception Faild';
    }
} else {
    $json["status"] = '400';
    $json["message"] = 'Bad Request';
}
echo json_encode($json);
?>
