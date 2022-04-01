<?php include 'includes/header.php';


$cliente = [
    'nombre' => 'leandro', 
    'saldo' => 300,
    'informacion' => [
        'tipo' => 'premium', 
        'disponible' => 200
    ]
];

echo "<pre>";
var_dump($cliente['informacion']);
echo "</pre>";


$cliente['codigo'] = 1209192012;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';