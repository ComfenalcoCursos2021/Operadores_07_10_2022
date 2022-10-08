<?php
    // Cometar codigo
    // Ensamblar en programacion
    // Argumentos en la programacion
    // Que son los JSON

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    $res = new stdClass();
    $num1 = 4;
    $num2 = 8;
    $res->num1 = $num1;
    $res->num2 = $num2;
    
    
    //Operador Suma
    $suma = $num1 + $num2;
    $res->suma = $suma;

    //Operador Resta
    $resta = $num1 - $num2;
    $res->resta = $resta;

    //Operador Division
    $dividir = $num1 / $num2;
    $res->dividir = $dividir;

    //Operador Multiplicacion
    $multiplicar = $num1 * $num2;
    $res->multiplicar = $multiplicar;

    // ------------------------------------
    //Operador Elevar
    $elevar = $num1 ** $num2;
    $res->elevar = $elevar;

    //Operador Modulo 'Resto'
    $modulo = $num1 % $num2;
    $res->modulo = $modulo;
    //-------------------------------------

    //Operador raiz cuadrada
    $raizCuadrada = sqrt($num1);
    $res->raizCuadrada = $raizCuadrada;

    //Operador raiz cubica '3.....∞'
    $raizCubica = pow($num1, (1/3));
    $res->raizCubica = $raizCubica;

    // Formula para verificar una raiz
    // $elevar = $num1 ** 2;
    // $resta = $num1 - $elevar;
    // $suma = $elevar + $resta;
    // $res->operacion = $suma;

    //Operador numero aleatorio
    $aleatorio = rand(1, $num1);
    $res->aleatorio = $aleatorio;

    //Operador de redondear
    $redondear = round(
        num:$num1,
        mode:PHP_ROUND_HALF_ODD
    );
    $res->redondear = $redondear;

   


    $res->servidor = $_SERVER["HTTP_HOST"];
    echo json_encode($res, JSON_PRETTY_PRINT);
    // echo phpinfo();
?>