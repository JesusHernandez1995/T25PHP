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
        if (isset($_POST['numero'])) {
            define("IVA", "21");
            echo 'El precio ' . $_POST['numero'] . ' con iva es ' . $_POST['numero'] + ($_POST['numero'] * (IVA / 100));
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce El precio de un producto</label>
                        <input type="number" class="form-control" name="numero">
                    </div>
                    <button type="submit" class="btn btn-primary">Comprovar el precio con iva</button>
                </form>
            <?php
        }
    ?>
</div>
</body>
</html>