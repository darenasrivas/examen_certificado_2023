<?php



// Inicializar el contador en 0 si no está definido
if (isset($_POST['contador'])) {
    $clicks = 0;
}

// Incrementar el contador cuando se hace clic en el botón
if (isset($_POST['boton'])) {
    $clicks = $_POST['contador']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contador de Clicks</title>
</head>
<body>

<form action="probando.php" method="post">
    <input type="submit" name="boton" value="Click para contar">
    <input type="hidden" name="contador" value="<?= $clicks ?>">
</form>

<p>El botón ha sido presionado <?= $clicks; ?> veces.</p>

</body>
</html>
