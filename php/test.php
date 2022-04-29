<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="inventaire_karlit";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}



$kk = $_POST['param'];
if($kk == "test"){
    $sql = "SELECT * from ordinateurs";
    $rs = $dbh->prepare($sql);
    $rs->execute();
    $reusltat = $rs->fetchAll();
    $valeur_td= "";
    for($i = 0; $i < count($reusltat); $i++){
        $valeur_td .= "<tr><td>". $reusltat[$i]["id"] ."</td>".
        "<td>". $reusltat[$i]["Prenom"] ."</td>".
        "<td>". $reusltat[$i]["Matricule"] ."</td>".
        "<td>". $reusltat[$i]["RAM"] ."</td></tr>";
    }
    echo $valeur_td;
}