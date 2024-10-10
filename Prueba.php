<?php
require_once 'Cliente.php';
require_once 'ProductoFisico.php';


$c1 = new Cliente("Pablo Mayo");
$c2 = new Cliente("Rocio Gonzalez");

$productofisico = new ProductoFisico("Telefono", 1000, 0.5);
echo "Nombre: " . $productofisico->getNombre() . ", Precio: " .  $productofisico->getPrecio() . ", Peso: " . $productofisico->calculaPrecioFinal();


?>

<ol>
<li><?= $c1->getNombre()?></li>
<li><?= $c2->getNombre()?></li>
</ol>

