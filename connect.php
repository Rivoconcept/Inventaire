<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=inventaire_karlit', 'root', 'gospels');
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>