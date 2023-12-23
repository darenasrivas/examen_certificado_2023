<?php
// Genera un número aleatorio y muestralo en decimal, octal, binario y hexadecimal
//Aquí genero el valor
$numero = rand(0,50000);

$numOctal = decoct($numero);
$numBin = decbin($numero);
$numHexa = dechex($numero);

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
<h1>
<!--    Aquí puedes visualizarlo -->
    <?= "Número decimal: $numero" . "<br>"?>
    <?= "Número binario: $numBin" . "<br>"?>
    <?= "Número hexadecimal: $numHexa" . "<br>"?>
    <?= "Número octal: $numOctal" . "<br>"?>
</h1>
</body>
</html>

