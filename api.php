<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    $_DATA = json_decode(file_get_contents("php://input"));
    settype($_DATA->A, $_DATA->tipo_datos_A);
    settype($_DATA->B, $_DATA->tipo_datos_B);
    $_DATA->respuesta = ($_DATA->tipo_datos_A == "bool") ? $_DATA->A && $_DATA->B : $_DATA->A & $_DATA->B;

    $_DATA->servidor = $_SERVER["HTTP_HOST"];
    echo json_encode($_DATA, JSON_PRETTY_PRINT);

?>