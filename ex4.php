<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $estudios = htmlspecialchars($_POST["studies"]);

    echo "El nombre de la persona es $nombre y sus estudios son $estudios <br /><br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">

        <input type="radio" name="studies" value="Sin Estudios">
        <label for="no_studies">Sin estudios</label><br>
        <input type="radio" name="studies" value="Estudios Primarios">
        <label for="primary_ed">Estudios Primarios</label><br>
        <input type="radio" name="studies" value="Estudios Secundarios">
        <label for="secondary_ed">Estudios Secundarios</label>

        <button type="submit">Send</button>
    </form>
</body>
</html>