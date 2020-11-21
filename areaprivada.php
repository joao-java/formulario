<?php
    session_start();
    if (!isset($_SESSION['id_usuario'])) {
        header("location: formulario.php"); 
        exit; //não mostrar nada antes desse comando 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <section class="area-privada">
    <h1>SEJA BEM VINDOOOO!</h1>
    </section>
</body>
</html>
