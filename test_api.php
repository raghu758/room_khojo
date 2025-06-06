<?php
// This is a simple API response

header("Content-Type: application/json");

$response = array(
    "success" => true,
    "message" => "API is working!"
);

echo json_encode($response);
?>