<?php

$username = $_GET["username"];
$message  = $_GET["message"];

$url = "http://snap.coffee/api/push";

$data = array(
    'api_token' => "{{api_token}}",
    'username' => $username,
    'message' => $message,
);
$options = array('http' => array(
    'method' => 'POST',
    'content' => http_build_query($data),
));
$contents = file_get_contents($url, false, stream_context_create($options));

?>

