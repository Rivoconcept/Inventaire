<?php
include("connect.php");

$param = $_POST['param'];






if($param="miseajour"){
    
   $id = $_POST["idbase"];
   $table = $_POST["menushow"];

   $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'$table'");
   $colname->execute();
   $colnom = $colname->fetchAll();
  

   $ins = $base->prepare("SELECT * FROM `$table` WHERE `$table`.`id`=:id");
   $ins->execute(array("id"=>$id));
   $donner=$ins->fetch();

   $result= "";
   for ($i = 0; $i < count($colnom); $i++) {
      $result .= $donner[$i]."akonndro";
   }
   echo $result;

}


?>