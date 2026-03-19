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

                        $tipoc = $_POST['tipoc'];
                        $valor = $_POST['txtp'];
                        


                        if ($tipoc == 1) {

                            if ($valor >= 500) {
                                $total = $valor*0.95;
                                $valorr= $valor-$total;
                                echo "O total a pagar é de $total R$, o valor que você iria pagar é de $valor R$ e o desconto é $valorr R$";
                            }else{
                                echo"você não tem desconto, o valor total é de $valor";
                            }
                        }
                        if ($tipoc == 2) {

                            if ($valor >= 1000) {
                                $total = $valor*0.90;
                                $valorr= $valor-$total;
                                echo "VOCÊ TEM FRETE GRATIS!!! O total a pagar é de $total R$, o valor que você iria pagar é de $valor R$ e o desconto é $valorr R$";
                            }else{
                                 echo "O total a pagar é de $total R$, o valor que você iria paragar é de $valor R$ e o desconto é $valorr R$";;
                            }
                        }
                         if ($tipoc == 3) {

                            
                                $total = $valor*0.85;
                                $valorr= $valor-$total;
                                echo "VOCÊ TEM FRETE GRATIS!!! O total a pagar é de $total R$, o valor que você iria pagar é de $valor R$ e o desconto é $valorr R$";
                           
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