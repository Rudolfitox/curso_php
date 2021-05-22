<?php 
    //comentario de una sola linea
    /*
        Esto es un comentario multilinea
    */

    echo ("Hola Mundo");
    echo "Hola cruel mundo <br/> <h1>estoy aprendiendo PHP</h1>";

    // variables
    $nombre = "Rudolf";
    $Nombre = "Rodolfo";

    //concatenacion de cadenas y variables
    echo $nombre."&nbsp;".$Nombre;

    $num1=5;
    $num2=77;

    $suma=$num1+$num2;
    echo $suma;

    echo "</br>La variable \$suma tiene el valor de $suma";
    
    $modulo =$num2%2;

    echo "El modulo de $num2 es $modulo" ;

    if($modulo==0)
       echo "</br>El numero $num2 es par";
    else echo "</br> El numero no es par";


    //Ciclo for

    for($i=0;$i<10;$i++){
        echo "</br>$i";
    }

?>