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
        if (isset($_POST['ventas'])) {
            ?>
                <form method="post"><?php
                for ($i = 1; $i <= $_POST['ventas']; $i++) {
                    echo '
                    <div class="mb-3">
                        <label class="form-label">Introduce la ganancia de la venta</label>
                        <input type="number" class="form-control" name="ganancia[]">
                    </div>';
                }?>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            <?php
        } else if (isset($_POST['ganancia'])) {
            $suma = 0;
            foreach ($_POST['ganancia'] as $ganancia) {
                $suma += $ganancia;
            }
            echo 'La ganancia de las ventas es ' . $suma;
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce el numero de ventas</label>
                        <input type="number" class="form-control" name="ventas">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            <?php
        }
    ?>
</div>
</body>
</html>