<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $contrato = htmlspecialchars($_POST['contrato']);

    echo $contrato."<br /><br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <textarea name="contrato" id="" cols="30" rows="20">
        En la ciudad de [........], se acuerda entre la Empresa [..........] 
        representada por el Sr. [..............] en su carácter de Apoderado,
        con domicilio en la calle [..............] y el Sr. [..............],
        futuro empleado con domicilio en [..............], celebrar el presente 
        contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
        artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>