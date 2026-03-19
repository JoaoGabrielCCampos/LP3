<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <div class="container">

        <div class="row">


            <h1>Formulario</h1>

            <div class="col-4 text-primary">
                <form action="RecebeDadosIMC.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira seu peso:</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ex: 70 kg"
                            name="txtpeso">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira sua altura:</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 1.70 m" name="txtalt">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Limpar campos</button>
                </form>
            </div>
            <br><br>

            <div class="col-4 text-success">
                <form action="RecebeDadosALG.php" method="POST">
                    <label class="form-label">Insira o tipo de carro</label>
                    <select class="form-select" aria-label="Default select example" name="txttipo">
                        <option value="1">Luxo</option>
                        <option value="2">Popular</option>
                    </select>
                    <br>
                    <label for="exampleFormControlInput1" class="form-label">Insira a quantidade de quilometros andados:</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 120 km" name="txtkm"> <br>
                            <label for="exampleFormControlInput1" class="form-label">Insira a quantidade de dias de aluguel:</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 dias" name="txtdia"><br>
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="button" class="btn btn-warning">Limpar campos</button>
                </form>
            </div>
             <div class="col-4 text-info">
                <form action="RecebeDadosPRG.php" method="POST">
                    <label for="exampleFormControlInput1" class="form-label">Insira a quantidade de horas de atividade praticadas no mês:</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 horas" name="txthrs"><br>
                            <button type="submit" class="btn btn-info">Enviar</button>
                            <button type="button" class="btn btn-secondary">Limpar campos</button>
                </form>
            </div>
        </div>

    </div>





   







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>


</body>

</html>