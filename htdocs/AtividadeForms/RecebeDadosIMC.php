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
<div class="card text-bg-danger mb-3" style="max-width: 25rem;">
  <div class="card-header">IMC</div>
  <div class="card-body">
    <h1 class="card-title">
</div>
<?php

$nota1= $_POST['txt1'];
$nota2= $_POST['txt2'];
$nota3= $_POST['txt3'];
$frequencia= $_POST['txtfreq'];
$media=($nota1 + $nota2 + $nota3)/3;


$imc=$peso/($alt*$alt);

if($frequencia>75){

if($media>=7){
  echo "Você foi Aprovado";
} else if($media>4){
  echo "Você está de Recuperação"
}else if($média<4){
echo "Você foi reprovado por nota";
}}else{
echo "Você foi reprovado por frequencia";
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