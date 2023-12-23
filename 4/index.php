<?php
// Haz un programa que tenga un botón para  generar una password con 8 caracteres aleatorios . Para ello toma los códigos ascii del 65 al 127

//Aquí genero el valor

if (isset($_POST['submit'])){
    $tuPassword = password();
}else{
    $tuPassword = "No hay password. Genéralo ahora.";
}
function password() {
    for ($i = 0; $i < 8; $i++) {
        $code = rand(65, 127);
        $password .= chr($code);
    }
    return $password;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<a style="%;color:darkblue;size:2rem" href="./../index.php">Volver</a>

<fieldset style="width:40%;margin: 20%;background: darkkhaki ">
    <legend>Acciones</legend>
<form action="index.php" method="post">
    <input type="submit" value="Genera Password" name="submit">
</form>
    <?= "Tu password es:" ?>
    <?= $tuPassword ?>
</fieldset>
</body>
</html>

