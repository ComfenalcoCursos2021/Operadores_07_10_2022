<?php

    // AJAX JavaScript
    // Api rest
    // Que es JavaScript
    // Que es DOM JavaScript
    // Cual es el estardar de JavaScript
    // Que son los protocolos Cross

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $_DATA["servidor"] = $_SERVER["HTTP_HOST"];
    extract($_DATA);

    echo json_encode($_DATA, JSON_PRETTY_PRINT);

?>