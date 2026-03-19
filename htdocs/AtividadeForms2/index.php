<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadeForms2</title>
</head>

<body>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <div class="container">

        <h1>Formularios 2</h1>
        <div class="row">
            <form action="RecebeDadosProf.php" method="POST">

                <div class="col-4 text-primary">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira sua primeira nota:</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Ex: 10 pts"
                            name="txt1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira sua segunda nota::</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 pts" name="txt2">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira sua terceira nota::</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 pts" name="txt3">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Insira sua frequencia (%)</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 90%" name="txtfreq">
                    </div>

                    <button type="submit" class="btn btn-outline-primary">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Limpar campos</button>
                </div>
                <br><br>
            </form>




            <div class="col-4 text-success">

                <form action="RecebeDadosAlok.php" method="POST">
                    <label for="exampleFormControlInput1" class="form-label">Insira o tipo de Instalação:</label>
                    <select class="form-select" aria-label="Default select example" name="tipo">
                        <option value="1">Residencial</option>
                        <option value="2">Comercial</option>
                        <option value="3">Industrial</option>
                    </select> <br>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Qual foi o consumo de Energia
                            (kWh):</label>
                        <input type="number" step="any" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ex: 10 kWh" name="txtn">
                    </div>


                    <button type="submit" class="btn btn-outline-primary">Enviar</button>

                    <button type="reset" class="btn btn-outline-danger">Limpar campos</button>

                    <br><br>
                </form>
            </div>
             <div class="col-4 text-success">

                <form action="RecebeDadosBlog.php" method="POST">
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
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>