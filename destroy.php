<?php
$param = $_POST["param"];

if($param == "deconnexion"){
    session_start();
    session_destroy();
    header('Location: :8080/datatable1/');
}

?>