<?php
include("connect.php");
$param = $_POST['param'];





if($param == "insertionbdd") {
   $post = $_POST["colonnevalues"];
   $table = $_POST["tablename"];
   
   $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'$table' ORDER BY ORDINAL_POSITION");
   $colname->execute();
   $colnom = $colname->fetchAll();

   $posts = ""; $colonnevalue = ""; $Res1 = ""; $Res2 = ""; $Res3 = ""; $cible = ""; $egal1 = ""; $egal2 = ""; 
   $tabl = []; $egaux1 = ""; $egaux2 = "";

   for ($i = 1; $i < count($colnom); $i++) {
      $Res1 .=  $colnom[$i]["COLUMN_NAME"] . ',';
      $Res2 .= "valeur".$i.',';
      $Res3 .= ":valeur".$i.',';
   }

  
   $posts = substr($post, 0, -8);
   $cible = substr($Res1, 0, -1);
   $egal1 = substr($Res2, 0, -1);
   $egal2 = substr($Res3, 0, -1);
   
   $colonnevalue = explode('akonndro', $posts);
   $egaux1 = explode(',', $egal1);

   $tabl = array_combine($egaux1, $colonnevalue);

   $insert1 = $base->prepare("INSERT INTO inventaire_karlit.$table ($cible) VALUES ($egal2)");
   $insert1->execute($tabl);
}



/**************************************************************************************************************************** */



if($param == "selectpardefaut"){
         
         $table = $_POST["menushow"];
         $tables = strtolower(str_replace(" ", "",$table));

         $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'$tables' ORDER BY ORDINAL_POSITION");
         $colname->execute();
         $colnom = $colname->fetchAll();
         
         $initial = "";
         $corps = "";
         $Res = "";
         $cible = "";
         $entete ="";
         $values = "";
         $corps ="";
         $Result = "";

         for ($i = 0; $i < count($colnom); $i++) {
         
            $Result .=  '<th>' .$colnom[$i]["COLUMN_NAME"] . '</th>';
            $Res .=  $colnom[$i]["COLUMN_NAME"] . ',';

         }

         $cible = substr($Res, 0, -1);
         
         $values = explode(',', $cible);
         foreach ($values as $val){
            $entete .= '<th>'.$val.'</th>';
         }
         echo '<thead><tr id="trposition"><th>N°</th>'.$entete.'<th>Admin</th></tr>';
         echo '</thead><tbody>';
         // <img style="width:30px" src="image/update.png">


         //------------------------------------------------------------------------------ */
         


         $ins = $base->prepare("SELECT * FROM inventaire_karlit.$tables ORDER BY ID DESC");
         $ins->execute();





      $k=1;         
      $result = $ins->fetchAll();
      foreach($result as $donnee) {
      
         
         echo '<tr>';
         
         echo '<td class="id_base">'.$k++.'</td>';
         foreach($colnom as $val) {
         echo '<td>'.$donnee[$val['COLUMN_NAME']].'</td>';
         }
         // echo '<td></td>';
         // echo '<td><a href="form_update.php?id_update='.$donnee["id"].'" id="update">Update</a></td>';
         echo '<td><input type="checkbox" class="chk"><a href="#" id="update"><img style="width:10px" src="image/modifier.png"></a><a href="#" id="erase"><img style="width:30px" src="image/delete.png"></a></td>';
         echo '</tr>';
         
      }
      

  

}  
    ?>