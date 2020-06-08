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
        <?php
            function diretor($valor){
                $add = $valor / 5;
                return $valor + $add;
            }

            function comum($valor){
                $add = $valor / 10;
                return $valor + $add;
            }

            function estag($valor){
                $add = $valor / 20;
                return $valor + $add;
            }

            $valor = $_GET["valor"];
            $carg = $_GET["cargo"];
            $total = 0;

            if($carg == "diretor"){
                $total = diretor($valor);
            }elseif($carg == "comum"){
                $total = comum($valor);
            }elseif($carg == "estagiario"){
                $total = estag($valor);
            }else{
                $total = "error";
            }

            echo "Salário com bônus = $total";
        ?>
    </div>
    <script src="../res/jquery.js"></script>
    <script src="../res/popper.js"></script>
    <script src="../res/bootstrap.js"></script>
</body>
</html>