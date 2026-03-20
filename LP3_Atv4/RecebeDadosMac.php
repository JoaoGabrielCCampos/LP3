<?php 
$add = $_POST["adicionais"];
$valor = 20;

for ($i = 0; $i < count($add); $i++) {
    if ($add[$i] == "Bacon") 
        $valor += 3;

    if ($add[$i] == "Cebola Caramelizada")
        $valor += 2;

    if ($add[$i] == "Cheddar Cremoso")
        $valor += 2.50;

    if ($add[$i] == "Hamburguer Extra")
        $valor += 5;
    }



?>

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
                <div class="card-header">Valor Final</div>
                <div class="card-body">
                    <h3 class="card-title">

<?php 
echo "O valor com os adicionais é $valor";

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