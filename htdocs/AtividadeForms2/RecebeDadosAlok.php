<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
                crossorigin="anonymous">
            <div class="card text-bg-danger mb-3 position-absolute top-50 start-50 translate-middle"
                style="max-width: 15rem;">
                <div class="card-header">Resultado</div>
                <div class="card-body">
                    <h3 class="card-title">

                        <?php

                        $tipo = $_POST['tipo'];
                        $energia = $_POST['txtn'];



                        if ($tipo == 1) {

                            if ($energia <= 500) {
                                $total = $energia * 0.4;
                                echo "O total a pagar é de $total R$";
                            } else {
                                $total = $energia * 0.65;
                                echo "O total a pagar é de $total R$";
                            }
                        }
                        if ($tipo == 2) {

                            if ($energia <= 1000) {
                                $total = $energia * 0.55;
                                echo "O total a pagar é de $total R$";
                            } else {
                                $total = $energia * 0.60;
                                echo "O total a pagar é de $total R$";
                            }
                        }
                        if ($tipo == 3) {

                            if ($energia <= 5000) {
                                $total = $energia * 0.55;
                                echo "O total a pagar é de $total R$";
                            } else {
                                $total = $energia * 0.60;
                                echo "O total a pagar é de $total R$";
                            }
                        }


                        ?>

                    </h3>
                </div>
                <p class="card-text"></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>