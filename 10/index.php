<?php
// Verificar si se ha pasado un nombre de usuario y un contador de clics en la URL
if (isset($_POST["usuario"]) && isset($_POST["clics"])) {
    $usuario = $_POST["usuario"];
    $clics =+ $_POST["clics"];
    $msj =  "Hola, $usuario. Has hecho $clics clic(s).";
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

<form action="index.php" method="post">
    <label for="usuario">Identifícate:</label>
    <input type="text" id="usuario" name="usuario" required>
    <input type="hidden" id="clics" name="clics" value="1">
    <button type="submit">Iniciar sesión</button>
</form>
<?= $msj ?>
</body>
</html>

