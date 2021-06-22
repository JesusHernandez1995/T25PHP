<?php 

echo "TABLA DE MULTIPLICAR '2' usando FOR <br /><br />";
// Con el for
for($i = 0; $i <= 10; $i++){
    $resultado = 2 * $i;
    echo "$resultado <br />";
}

echo "<br /><br /> TABLA DE MULTIPLICAR '2' usando WHILE <br /><br />";
// Con el while
$i = 0;
while($i <= 10){
    $resultado = 2 * $i;
    echo "$resultado <br />";
    $i++;
}

echo "<br /><br /> TABLA DE MULTIPLICAR '2' usando DO-WHILE <br /><br />";
// Con el while
$i = 0;
do{
    $resultado = 2 * $i;
    echo "$resultado <br />";
    $i++;
} while($i <= 10)
?>