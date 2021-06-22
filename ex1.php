<?php 

$number = rand(1, 3);

switch($number){
    case '1':
        echo "Numero random: $number <br />";
        echo "El numero devuelto es: Uno";
        break;

    case '2':
        echo "Numero random: $number <br />";
        echo "El numero devuelto es: Dos";
        break;
    
    case '3':
        echo "Numero random: $number <br />";
        echo "El numero devuelto es: Tres";
        break;
    
    default:
        break;
}

?>