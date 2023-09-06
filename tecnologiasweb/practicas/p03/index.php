<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN” “http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Práctica 3 </title>
</head>

<body>
    <h2> Ejercicio 1</h2>
    <p> 1. Determina cuál de las siguientes variables son válidas y explica por qué: </p>
    <p> $_myvar, $_7var, myvar, $myvar, $var7, $_element1, $house*5 </p>
    <?php
    //AQUI VA MI CODIGO PHP 
    $_myvar;
    $_7var;
    //myvar;  Invalido
    $myvar;
    $var7;
    $_element1;
    //$house*5;  Invalido

    echo '<ul>';
    echo '<li> $_myvar es valida porque inicia con un guion bajo </li>';
    echo '<li> $_7var es valida porque inicia con un guion bajo </li>';
    echo '<li> $myvar es valida porque inicia con una letra </li>';
    echo '<li> $var7 es valida porque inicia con una letra </li>';
    echo '<li> $_element1 es valida porque inicia con un guion bajo </li>';
    echo '</ul>';
    ?>

    <h2>Ejercicio 2 </h2>
    <p> 2. Proporcionar los valores de $a, $b, $c como sigue: </p>
    <p> $a = “ManejadorSQL”;
        <br>$b = 'MySQL’;
        <br>$c = &$a;
    </p>


    <p>a. Ahora muestra el contenido de cada variable </p>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;

    echo " a= $a <br>
    b=$b <br>
    c= $c <br>"
    ?>


    <p>b. Agrega al código actual las siguientes asignaciones:</p>
    <p> $a = “PHP server”;
        <br>$b = &$a;
    </p>
    <?php
    $a = "PHP server";
    $b = &$a;
    ?>
    <p> c. Vuelve a mostrar el contenido de cada uno </p>
    <?php
    echo " a= $a <br>
    b=$b <br>
    c= $c <br>"
    ?>
    <p> <strong>d. Describe en y muestra en la página obtenida qué ocurrió en el segundo bloque de asignaciones</strong></p>
    <p>En el primer resultado ya le habiamos asignado valores a las variables <br>
        asi solo mostramos su valor con un echo y la variable "c" toma el valor <br> 
        de la variable "a". <br>
        En el segundo resultado a la variable "a" le cambiamos su valor y como "b" <br>
        hace referencia a la variable "a" como tambien "c" se muestra el mismo valor
    </p>


</body>

</html>