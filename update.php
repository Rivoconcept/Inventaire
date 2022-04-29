<?php
include("connect.php");

$param = $_POST['param'];







if($param == "insertupdate") {


   $postvalues = $_POST["colonnevalues"];
   $postid = $_POST["idsend"];
   $tables = $_POST["menushow"];


   $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'$tables'");
   $colname->execute();
   $colnom = $colname->fetchAll();
  

   $posts = "";
   $colonnevalue = "";

   $Res1 = ""; 
   $Res2 = ""; 
   $Res3 = ""; 
   $cible = ""; 
   $value = ""; 
   $egal1 = ""; 
   $egal2 = ""; 
   $cibles = ""; 
   $values = ""; 
   $egaux1 = ""; 
   $egaux2 = "";

   for ($i = 1; $i < count($colnom); $i++) {
      $Res1 .=  $colnom[$i]["COLUMN_NAME"] . ',';
      $Res2 .= "valeur".$i.',';
      $Res3 .= ":valeur".$i.',';
   }


   $posts = substr($postvalues, 0, -8);
   $cible = substr($Res1, 0, -1);
   $egal1 = substr($Res2, 0, -1);
   $egal2 = substr($Res3, 0, -1);
   
   $colonnevalue = explode('akonndro', $posts);
   $cibles = explode(',', $cible);
   $egaux1 = explode(',', $egal1);
   $egaux2 = explode(',', $egal2);


   
   for ($i = 0; $i < count($colnom)-1; $i++) {
   $insert2 = $base->prepare("UPDATE `$tables` SET $cibles[$i] = $egaux2[$i] WHERE `$tables`.`id` = :id");
   $insert2->execute(array(
        "id"=>$postid,
        $egaux1[$i] => strval($colonnevalue[$i])

    ));
   }
  
}

?>