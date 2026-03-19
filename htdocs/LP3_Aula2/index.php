

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
    <style>
        body{
            background-color: green;
        }
    </style>
</head>
<body>
    <h1>LP3 Aula 2</h1>
    
<?php
    echo "bla bla";

    $curso= "tinf";
    $serie= "3º";
    echo "<br> minha turma é $serie $curso ";
    $num = 6;

?>
<h3>Lista</h3>
<ul>
    <?php 
    if($num % 2 == 0) {
   $resp = "é par";
        }
    else{
    $resp = " é impar";
    }
   
    ?>
    <li>a variavel num <?php echo $resp; ?> </li>

    <?php if($num % 2 == 0){ ?>
      <li> é par </li>
        <?php } else { ?>
        <li> é impar</li> <?php } ?>
      
       
    <?php
    
 
    
    ?>

</ul>
</body>
</html>


