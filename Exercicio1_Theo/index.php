<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1_Theo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../res/bootstrap.css">
</head>
<body>
    <div class="main">
        <form action="result.php" method="get">
            <label for="sal"><h3>Salario:</h3></label>
            <input type="number" name="valor" id="valor" class="form form-control"><br>
            <label for="Cargo"><h3>Cargo:</h3></label>
            <select name="cargo" id="cargo" class="form form-control">
                <option value="diretor">diretor</option>
                <option value="comum">comum</option>
                <option value="estagiario">estagiario</option>
            </select><br>
            <input type="submit" value="Enviar" class="btn btn-success">
        </form>
    </div>
    <script src="../res/jquery.js"></script>
    <script src="../res/popper.js"></script>
    <script src="../res/bootstrap.js"></script>
</body>
</html>