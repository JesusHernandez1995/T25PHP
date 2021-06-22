<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body>
<div class="container card py-3 mt-5">
    <?php
        if (isset($_POST['dia'])) {
            switch ($_POST['dia']) {
                case 'lunes':
                case 'martes':
                case 'miercoles':
                case 'jueves':
                case 'viernes':
                    echo 'El dia ' . $_POST['dia'] . ' es un dia laboral.';
                    break;
                case 'sabado':
                case 'domingo':
                    echo 'El dia ' . $_POST['dia'] . ' es un dia no laboral.';
                    break;
                default:
                    echo 'El dia es incorrecto';
                    break; 
            }
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce un dia de la semana</label>
                        <input type="text" class="form-control" name="dia">
                    </div>
                    <button type="submit" class="btn btn-primary">Comprovar si es dia laborable</button>
                </form>
            <?php
        }
    ?>
</div>
</body>
</html>