<?php 


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $select1_1000 = $_POST["ingresos1_1000"];
    $select3000 = $_POST["ingresos3000"];

    if(isset($select3000) && $select3000 >= 3001)  echo "Debe pagar impuestos";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">
        <br>
        <label for="ingresos1_1000">Escoja su ingreso (1~1000):</label>
        <select name="ingresos1_1000" id="ingresos1_1000">
            <?php 
                for($i = 1; $i <= 1000; $i++ ){
                    echo "<option value="."$i".">$i</option>";
                }
            
            ?>
        </select>
        <br>
        <label for="ingresos1000_3000">Escoja su ingreso (1000~3000):</label>
        <select name="ingresos1000_3000" id="ingresos1000_3000">
            <?php 
                for($i = 1001; $i <= 3000; $i++ ){
                    echo "<option value="."$i".">$i</option>";
                }
            
            ?>
        </select>
        <br>
        <label for="ingresos3000">Escoja su ingreso (3000~...):</label>
        <select name="ingresos3000" id="ingresos3000">
            <?php 
                for($i = 3000; $i <= 4000; $i++ ){
                    echo "<option value="."$i".">$i</option>";
                }
            
            ?>
        </select>
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>