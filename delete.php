<?php

include("connect.php");

$param = $_POST["param"];


 
if($param == "suppression"){
        $id = $_POST["idbase"];
        $tables = $_POST["menushow"];

        $cible ="";
        $cibles ="";

        $cible = substr($id, 0, -1);
        $cibles = explode(',', $cible);

        
        
        
        for ($i = 0; $i < count($cibles); $i++) {
            $ins = $base->prepare("DELETE FROM `inventaire_karlit`.`$tables` WHERE inventaire_karlit.`$tables`.`id` = :del");
            $ins->execute(array("del"=> $cibles[$i]));
         
        }
    }
  
    // header('Location: http://localhost:8080/datatable1/delete.php');

?>