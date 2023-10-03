<?php
    // get the webhook response
$body = @file_get_contents("php://input");

// decode the json data into a php object
$response = json_decode($body);
    return var_dump($response);

?>


