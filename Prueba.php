<?php
require_once 'Cliente.php';
$c1 = new Cliente("Pablo Mayo");
$c2 = new Cliente("Rocio Gonzalez");

?>

<ol>
<li><?= $c1->getNombre()?></li>
<li><?= $c2->getNombre()?></li>
</ol>

