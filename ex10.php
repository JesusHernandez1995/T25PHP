<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);

    echo "El nombre introducido es $nombre <br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 10</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">

        <button type="submit">Send</button>
    </form>
</body>
</html>