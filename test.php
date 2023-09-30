<?php
    // header('Content-Type: application/json');

    $json = file_get_contents("php://input");
        $data = $json;
    
    echo '<pre>';
    print_r($data);die('fgf');

?>


