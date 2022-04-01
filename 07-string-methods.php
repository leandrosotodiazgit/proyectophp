<?php include 'includes/header.php';
$nombreCliente = "leandro";

echo strtoupper($nombreCliente);

echo strtolower($nombreCliente);

$tipoCliente = "clasico";
echo "el cliente {$nombreCliente} es {$tipoCliente}";


include 'includes/footer.php';