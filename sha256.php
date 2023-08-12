<?php
if(isset($_GET['hash'])){
    $hash = $_GET['hash'];
    // echo hash('sha256', $hash);
    // create json response
    $response = array(
        'Digest' => hash('sha256', $hash)
    );
    // encode json
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>
