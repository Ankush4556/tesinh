<?php
    // get the webhook response
$body = file_get_contents("php://input");


// decode the json data into a php object
$json_input = '{  
    "employee": {  
        "name":       "sonoo",   
        "salary":      56000,   
        "married":    true  
    }  
}';
$response = json_decode($body);
    return var_dump($json_input);

?>


