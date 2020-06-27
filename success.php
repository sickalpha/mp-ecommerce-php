<?php
echo "<h1> su pago se cobro correctamente.</h1>";
echo 'Su pago se realizo con: ' .htmlspecialchars($_GET["payment_type"]).'<br>';
echo 'Referencia externa: ' .htmlspecialchars($_GET["external_reference"]).'<br>';
echo 'Id Referencia de pago de MercadoPago: ' .htmlspecialchars($_GET["collection_id"]).'<br>';
echo '<a href="/">Regresar a la página principal</a>';
 ?>
