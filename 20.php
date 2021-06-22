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
        if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['op'])) {
            switch ($_POST['op']) {
                case '+':
                    echo $_POST['num1'] + $_POST['num2'];
                    break;
                case '-':
                    echo $_POST['num1'] - $_POST['num2'];
                    break;
                case '*':
                    echo $_POST['num1'] * $_POST['num2'];
                    break;
                case '/':
                    echo $_POST['num1'] / $_POST['num2'];
                    break;
                case '%':
                    echo $_POST['num1'] % $_POST['num2'];
                    break;
                case '^':
                    echo pow($_POST['num1'], $_POST['num2']);
                    break;
            }
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce un numero</label>
                        <input type="number" class="form-control" name="num1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce un numero</label>
                        <input type="number" class="form-control" name="num2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una operacion</label>
                        <input type="text" class="form-control" name="op">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </form>
            <?php
        }
    ?>
</div>
</body>
</html>