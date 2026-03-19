<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <div class="container">
        <div class="row  ">
            <div class="card text-bg-warning mb-3 position-absolute top-50 start-50 translate-middle" style="max-width: 15rem;">
                <div class="card-header">Valor Total</div>
                <div class="card-body">
                    <h1 class="card-title">
                </div>
                <?php

                $tipo = $_POST['txttipo'];
                $km = $_POST['txtkm'];
                $dia = $_POST['txtdia'];

                if ($tipo == 2) {
                    $totaldiap = 90 * $dia;
                    if ($km <= 100) {
                        $totalkmp = $km * 0.2;
                    } else {
                        $totalkmp = $km * 0.1;
                    }
                    $totalp = $totaldiap + $totalkmp;

                    echo "O valor total a pagar é de $totalp Reais <br><br><br>";
                }
  if ($tipo == 1) {
                    $totaldial = 120 * $dia;
                    if ($km <= 100) {
                        $totalkml = $km * 0.3;
                    } else {
                        $totalkml = $km * 0.25;
                    }
                    $totall = $totaldial + $totalkml;

                    echo "O valor total a pagar é de $totall Reais <br><br><br>";
                }
                ?>
                </h1>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>