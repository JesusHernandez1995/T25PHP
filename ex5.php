<?php 

$cont = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);
    if(isset($_POST['check1'])) $cont++;
    if(isset($_POST['check2'])) $cont++;
    if(isset($_POST['check3'])) $cont++;
    if(isset($_POST['check4'])) $cont++;

    echo "La cantidad de deportes que practica $nombre es $cont <br /><br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">
        <br>
        <input type="checkbox" name="check1">Futbol
        <br>
        <input type="checkbox" name="check2">Tenis
        <br>
        <input type="checkbox" name="check3">Basket
        <br>
        <input type="checkbox" name="check4">Volleyball
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>