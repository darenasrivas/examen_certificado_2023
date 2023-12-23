<?php
/**
 * Generamos un número del 1 al 15.
 * En función del número generado mostraremos un mensaje
 * con el  nombre del mes (1-Enero, 2- Febrero …)
 * y el número de días.
 * En el caso de febrero en número de días que mostraremos será 28 o 29 días
 *
 * Usa una estructura switch-case
 */

$mes = rand(1,15);

switch($mes){
    case 1;
        $msj = "Enero";
        $dias = 31;
        break;
    case 2;
        $msj =  "Febrero";
        $dias = "28 o 29";
        break;
    case 3;
        $msj =  "Marzo";
        $dias = 31;
        break;
    case 4;
        $msj =  "Abril";
        $dias = 30;
        break;
    case 5;
        $msj =  "Mayo";
        $dias = 30;
        break;
    case 6;
        $msj =  "Junio";
        $dias = 30;
        break;
    case 7;
        $msj =  "Julio";
        $dias = 31;
        break;
    case 8;
        $msj =  "Agosto";
        $dias = 31;
        break;
    case 9;
        $msj =  "Septiembre";
        $dias = 30;
        break;
    case 10;
        $msj =  "Octubre";
        $dias = 31;
        break;
    case 11;
        $msj =  "Noviembre";
        $dias = 30;
        break;
    case 12;
        $msj =  "Diciembre";
        $dias = 31;
        break;
    default:
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>
<fieldset>

<?php

    if ($mes<13) {
        echo $mes . "-" . $msj . " tiene $dias dias";
    }else{
        echo " $mes No es un mes válido";
    }
?>

</fieldset>

</body>
</html>

