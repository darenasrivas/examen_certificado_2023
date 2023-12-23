<?php
// 5. Haz una calculadora sencilla en php. Debemos tener 2 operadores y un resultado.
//Al apretar operar me devolverá el resultado

//Aquí genero el valor

if(isset($_POST['submit'])){
    $op1 =($_POST['op1']);
    $op2 = ($_POST['op2']);
    $operacion = ($_POST['operador']);
    switch ($operacion){
        case "+";
            $resultado = sumar($op1, $op2);
            break;
        case "-";
            $resultado = restar($op1, $op2);
            break;
        case "*";
            $resultado = multiplicar($op1, $op2);
            break;
        case "/";
            $resultado = dividir($op1, $op2);
            break;
    }
}

function sumar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 + $op2;
    }else{
        return "$op1 + $op2 no se puede hacer";
    }
}

function restar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 - $op2;
    }else{
        return "$op1 - $op2 no se puede hacer";
    }
}

function multiplicar(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        return $op1 * $op2;
    }else{
        return "$op1 * $op2 no se puede hacer";
    }
}

function dividir(string|null $op1, string|null $op2):int|string{
    //Si es númerico, es decir, is_numeric
    if((is_numeric($op1)) && (is_numeric($op2))) {
        if($op2 != 0)
            return $op1 / $op2;
    }else{
        return "$op1 / $op2 no se puede hacer";
    }
    return "$op1 no se puede dividir por 0";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<form action="index.php" method="post">
<fieldset>
    <legend>Calculadora</legend>
    <input type="text" name="op1" id="" placeholder="Operador 1">
    <select name="operador" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="op2" id="" placeholder="Operador 2">
    <input type="submit" value="submit">
</fieldset>
</form>
<h1>
<!--    Aquí el resultado -->
    <?= $resultado ?>
</h1>

</body>
</html>

