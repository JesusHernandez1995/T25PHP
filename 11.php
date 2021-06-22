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
        if (isset($_POST['radio'])) {
            echo 'el area de un circulo con radio ' . $_POST['radio'] . ' es ' . pi() * ($_POST['radio'] * $_POST['radio']);
        } else {
            ?>
                <form method="post">
                      <div class="mb-3">
                        <label class="form-label">Introduce el radio de un circulo</label>
                        <input type="number" class="form-control" name="radio">
                      </div>
                      <button type="submit" class="btn btn-primary">Comprovar area</button>
                </form>
            <?php
        }
    ?>
</div>
</body>
</html>