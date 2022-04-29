
<?php

include("connect.php");
$testenvoiparam = $_POST['param'];

// if($testenvoiparam == "nombre_colone"){
//     $Res = "";
//         $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'ordinateurs'");
//         $colname->execute();
//         $colnom = $colname->fetchAll();
//         for ($i = 0; $i < count($colnom); $i++) {
//             $Res .= $colnom[$i]["COLUMN_NAME"] .";";    
//          }
//         echo count($colnom) . "*". $Res;
// }

// if($testenvoiparam == "autoinsert") {
//     $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'ordinateurs'");
//     $colname->execute();
//     $colnoms = $colname->fetchAll();
//     for ($i = 0; $i < count($colnoms); $i++) {
//         $Res .= $colnoms[$i]["COLUMN_NAME"] .",";
        
//      }
//     echo "aaa";
// }




if($testenvoiparam == "selectpardefaut"){

    $colname = $base->prepare("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = N'ordinateurs'");
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
    echo '<thead><tr><th>N°</th>'.$entete.'<th>Delete</th><th>Update</th></tr>';
    echo '</thead><tbody>';

 
    //------------------------------------------------------------------------------ */
    


    $ins = $base->prepare("SELECT * FROM `inventaire_karlit`.`ordinateurs`");
    $ins->execute();





$k=1;         
$result = $ins->fetchAll();
foreach($result as $donnee) {
  
    
    echo '<tr>';
      
    echo '<td class="id_base">'.$k++.'</td>';
    foreach($colnom as $val) {
      echo '<td>'.$donnee[$val['COLUMN_NAME']].'</td>';
    }
    echo '<td><a href="#" id="erase">Delete</a></td>';
    // echo '<td><a href="form_update.php?id_update='.$donnee["id"].'" id="update">Update</a></td>';
    echo '<td><a href="#" id="update">Update</a></td>';
    echo '</tr>';
    
  }
       

   

}  
?>







