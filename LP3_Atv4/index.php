<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadeForms2</title>
    <style>
        .form-check-input:checked {
            background-color: rgb(255, 223, 43) !important;
            border-color: red !important;
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 0, 0, 0.25);
        }
    </style>


</head>

<body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <div class="container">

        <h1>Formularios 2</h1>
        <div class="row">
            <form action="RecebeDadosMac.php" method="POST">

                <div class="col-4 text-danger">



                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira seu nome:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: Denis Henrique de Deus Lima" name="txtname">
                    </div>
                    <div name="adicionais[]">
                        <h5>Adicionais:</h5> <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Bacon" id="checkDefault"name="adicionais[]">
                            <label class="form-check-label" for="checkDefault">
                                Bacon
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cheddar Cremoso" id="checkDefault"name="adicionais[]">
                            <label class="form-check-label" for="checkDefault"name="adicionais[]">
                                Cheddar Cremoso
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cebola Caramelizada" id="checkDefault"name="adicionais[]">
                            <label class="form-check-label" for="checkDefault"name="adicionais[]">
                                Cebola Caramelizada
                            </label>
                        </div>
                        <br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Hamburguer Extra" id="checkDefault"name="adicionais[]">
                            <label class="form-check-label" for="checkDefault"name="adicionais[]">
                                Hamburguer Extra
                            </label>
                        </div>
                    </div>
                    <br>
                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                        autocomplete="off" checked>
                    <label class="btn btn-outline-success" for="success-outlined">Quero guardanapo </label>

                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                        autocomplete="off">
                    <label class="btn btn-outline-danger" for="danger-outlined">Não quero guardanapo</label>
                    <br><br>



                    <button type="submit" class="btn btn-outline-warning">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Limpar campos</button>
                </div>
                
            </form>
<br><br>
            <form action="RecebeDadosBlog.php" method="POST">

                <div class="col-4 text-success">


                    <label for="exampleFormControlInput1" class="form-label">Insira o tipo de Cliente:</label>
                    <select class="form-select" aria-label="Default select example" name="tipoc">
                        <option value="1">Cliente Comum</option>
                        <option value="2">Cliente VIP</option>
                        <option value="3">Cliente Premium</option>
                    </select> <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Qual é o valor da compra(R$):</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 R$" name="txtp">
                    </div>


                    <button type="submit" class="btn btn-outline-primary">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Limpar campos</button>

                    <br><br>

                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>