<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    $_DATA = json_decode(file_get_contents("php://input"));
    settype($_DATA->num1, $_DATA->tipo_datos_num_1);
    settype($_DATA->num2, $_DATA->tipo_datos_num_2);
    
    $_DATA->igual = $_DATA->num1 == $_DATA->num2;
    $_DATA->identico = $_DATA->num1 === $_DATA->num2;
    $_DATA->diferente = $_DATA->num1 != $_DATA->num2;
    $_DATA->no_identico = $_DATA->num1 !== $_DATA->num2;
    $_DATA->menor = $_DATA->num1 < $_DATA->num2;
    $_DATA->menor_igual = $_DATA->num1 <= $_DATA->num2;
    $_DATA->mayor = $_DATA->num1 > $_DATA->num2;
    $_DATA->mayor_igual = $_DATA->num1 >= $_DATA->num2;

    $_DATA->servidor = $_SERVER["HTTP_HOST"];
    echo json_encode($_DATA, JSON_PRETTY_PRINT);

?>