<?php
// Dado una página con 5 submit, como se muestra en el ejemplo, visualiza el submit que he apretado o si no he apretado ninguno indícalo

//Aquí genero el valor
$opcion = $_POST['submit'] ?? "";

$msj = match($opcion){
    "Ver"=>"Has pulsado en ver",
    "Insertar"=>"Has pulsado en insertar",
    "Borrar"=>"Has pulsado en borrar",
    "Consultar"=>"Has pulsado en consultar",
    "Editar"=>"Has pulsado en editar",
    default=> "No has pulsado ningún botón",
};

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
<form action="index.php" method="post">
<fieldset>
    <legend>Opciones</legend>
    <input type="submit" value="Ver" name="submit">
    <input type="submit" value="Insertar" name="submit">
    <input type="submit" value="Borrar" name="submit">
    <input type="submit" value="Consultar" name="submit">
    <input type="submit" value="Editar" name="submit">
</fieldset>
</form>
<?= $msj ?>
</body>
</html>

