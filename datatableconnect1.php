<?php
// $host="localhost";
// $port=3306;
// $socket="";
// $user="root";
// $password="";
// $dbname="inventaire_karlit";

// try {
//     $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);

// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }

include("connect.php");

$kk = $_POST['param'];
if($kk == "test"){
    // $sql = "SELECT * from ordinateurs";
    // $rs = $base->prepare($sql);
    // $rs->execute();
    // $reusltat = $rs->fetchAll();
    // $valeur_td= "";
    // for($i = 0; $i < count($reusltat); $i++){
    //     $valeur_td .= "<tr><td>". $reusltat[$i]["id"] ."</td>".
    //     "<td>". $reusltat[$i]["Prenom"] ."</td>".
    //     "<td>". $reusltat[$i]["Matricule"] ."</td>".
    //     "<td>". $reusltat[$i]["RAM"] ."</td></tr>";
    // }
    // echo $valeur_td;


    $initial = "";
    $ins = $base->prepare("SELECT * FROM `ordinateurs`");
    $ins->execute();
   $resultat = $ins->fetchAll();
   for($i = 0; $i < count($resultat); $i++)
   {
    $initial .= '<tr class="ligne_affichier">'.
                        
                        '<td>'. ($i + 1) .'</td>'.
                        '<td class="id_base">'. $resultat[$i]["id"] .'</td>'.
                        '<td>'. $resultat[$i]["Date"] .'</td>'.
                        '<td class="prnom">'. $resultat[$i]["Prenom"] .'</td>'.
                        '<td>'. $resultat[$i]["Matricule"] .'</td>'.
                        '<td>'. $resultat[$i]["Fonction"] .'</td>'.
                        '<td>'. $resultat[$i]["Salle"] .'</td>'.
                        '<td>'. $resultat[$i]["Nom_PC"] .'</td>'.
                        '<td>'. $resultat[$i]["Marque"] .'</td>'.
                        '<td>'. $resultat[$i]["Reference"] .'</td>'.
                        '<td>'. $resultat[$i]["Processeur"] .'</td>'.
                        '<td>'. $resultat[$i]["RAM"] .'</td>'.
                        '<td>'. $resultat[$i]["HDD"] .'</td>'.
                        '<td>'. $resultat[$i]["Couleur"] .'</td>'.
                        '<td><a href="#" id="erase">Delete</a></td>'.
                        '<td><a href="form_update.php?id_update='.$resultat[$i]["id"].'" id="update">Update</a></td>'.
                '</tr>';
                

    }
    echo $initial;
}