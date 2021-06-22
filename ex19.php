<?php 

session_start();
define("PASSWORD", 1234);
$cont = 0;

if(empty($_SESSION['contador'])){
    $_SESSION["contador"] = $cont;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $password = htmlspecialchars($_POST["password"]);

    if(strcmp($password, PASSWORD)!== 0)    $_SESSION["contador"]++;
    else{
        echo "Felicidades!, ha podido iniciar sesión!";
        session_destroy();
    }
    if($_SESSION["contador"] >= 3)  echo "El numero maximo de intentos ha sido alcanzado<br /> <br /> <br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 19</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">
        <br>
        <label for="Password">Ingrese una contraseña</label>
        <input type="password" for="Password" name="password">

        <button type="submit">Send</button>
    </form>
</body>
</html>