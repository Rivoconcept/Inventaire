<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=inventaire_karlit', 'root', 'Karlit');
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>