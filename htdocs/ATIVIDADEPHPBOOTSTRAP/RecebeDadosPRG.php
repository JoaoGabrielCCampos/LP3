<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row  ">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="card text-bg-secondary mb-3 position-absolute top-50 start-50 translate-middle" style="max-width: 15rem;">
  <div class="card-header">IMC</div>
  <div class="card-body">
    <h1 class="card-title">
</div>
<?php

$hrs= $_POST['txthrs'];



if($hrs<=10){
$pont=$hrs*2;
}else if($hrs<=20){
$pont=$hrs*5;
}else {
$pont=$hrs*10;
}
$din=$pont*0.05;

echo "Você tem $pont pontos e $din Reais"

?>
</h1>
    <p class="card-text"></p><br><br>
  </div>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>