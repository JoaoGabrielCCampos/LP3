<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
body{
    font-family : Poppins;
     background-color: rgb(49, 101, 170);
     color:rgb(255, 255, 255);
}
  img{
    width:200px;
    transition: width 0.5s;
   }

   img:hover {
    width: 400px;
    transition: width 0.5s;
   }
 
</style>
</head>
<body>
    <h1>
        LP3 Aula 3
    </h1>
   <img src="image.png" > <br>
    
    <?php

    for($i = 1 ; $i <30; $i++) {
       if($i % 2 == 0)  {
        echo "$i é par <br><br>";
        }
    }

    $t=1;

    while($t < 30){
        if($t % 2 ==1){ 
            echo "$t é impar <br><br>";
       
        }
         $t++;
    }
      ?>
    <h4>
    Multiplos de 3 entre 0 e 100
    </h4>
<?php

for($m = 0; $m <100; $m++){
    if($m % 3 == 0){ ?>
<ul>
<li>
<?php echo"$m é um multiplo de 3 "?>
</li>
</ul>
<?php
    }

}
$g=0;
  for($c = 100 ; $c >0; $c-=5) 
 {
        echo " $c <br><br>";
        }
        echo "$c e acabou!";
    for ($a = 14; $a < 73; $a++){

$g = $a+$g;

}
$b=0;

$b=($g/($a-14));

    echo "A média é de $b ";

    for($n=30 ;$n >=1 ; $n-=1){
        if($n % 4 == 0){
            echo"[$n]<br><br>";
        }
        else{
           echo "$n <br><br>" ;
        }
    }
   ?>

  

</body>
</html>