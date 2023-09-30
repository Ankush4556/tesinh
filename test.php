<?php
    header('Content-Type: application/json');

    $json = json_decode(file_get_contents("php://input"), true);
        $data = $json;
    
    echo '<pre>';
    print_r($data);die('fgf');

?>


