<?php include 'includes/header.php';

$carrito = ['tablet', 'tv', 'cpu'];
echo"<pre>";
var_dump($carrito) ;
echo"<pre>";

echo $carrito[1];

$carrito[5] = "nuevo producto";

echo $carrito[5];


array_push($carrito, 'lampara');

array_unshift($carrito, 'celu');
echo"<pre>";
var_dump($carrito) ;
echo"<pre>";

include 'includes/footer.php';

