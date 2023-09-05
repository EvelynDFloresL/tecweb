<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.1//EN”
“http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd”>
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
</body>
</html>