<?php
$testenvoie =  $_POST['param'];

if($testenvoie == "test"){
    echo "rivo";
}

if($testenvoie == "notest"){
    $valeurtext1 = $_POST['textbox1'];
    echo $valeurtext1 . "vero";
}