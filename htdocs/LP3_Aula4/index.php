<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 4</title>
</head>
<body>
    <img src="LP3_Aula4/index.php" alt="foto">
    <?php
    //Primeira
    echo"<br>";
    for($i=-10; $i<=10; $i++) {
            echo "  $i  ";
                            }
echo"<br>";      
    //Segunda
    $tudo=0;
    for($t=3; $t<=500; $t+=6){
$tudo=$tudo+$t;
}
echo"<br>$tudo";
echo"<br>";
//Terceira

for($c=100; $c>0; $c-=10){
    echo"  $c  ";
}
echo"Acabou!";
echo"<br>";
//Quarta
for($d=99; $d>0; $d-=2){
    if($d % 5 == 0){
        echo " [$d] ";
    }
    else{
    echo " $d";}
}
echo"<br>";

for($h=150; $h>=0; $h-=5){
    echo"  $h  ";
}
echo"<br>";
$p=150;
while($p>=0){
    echo"  $p  ";
  $p = $p-5;
}
echo"<br>";











?>

</body>
</html>