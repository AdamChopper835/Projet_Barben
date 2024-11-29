<?php
// Etape 1 -> Connexion a la base de données
$server = "localhost";
$username = "root";
$password = "";
$databaseName = "barben";

// Connexion a la base de données
$conn = new mysqli($server, $username, $password, $databaseName);

// Check connection
if($conn->connect_error) {
    die("connection BDD échouée");
}

// Etape 2 -> Execute requete SQL
$sql = "SELECT * FROM `biomes`";
$result = $conn->query($sql);
$array = array();
// On parcours tous les resultats sql
while($row = $result->fetch_assoc()) {
    // On ajoute notre dictionnaire au tableau de resultats
    $enclots_sql = "SELECT * FROM `enclots` WHERE id_biomes = '".$row["id"]."'";
    $enclots_result = $conn->query($enclots_sql);

    $enclots = array();
    while($enclotsRow = $enclots_result->fetch_assoc()) {
        $id_animaux = json_decode($enclotsRow["id_animaux"]);
        $animaux_sql = "SELECT * FROM `animaux` WHERE id in ('".join("','",$id_animaux)."')";
        $animaux_result = $conn->query($animaux_sql);
        $animaux = array();
        while($animauxRow = $animaux_result->fetch_assoc()) {
            $animaux[] = $animauxRow;
        }
        $enclotsRow["animals"] = $animaux;

        $enclots[] = $enclotsRow;
    }

    $row["enclots"] = $enclots;
    $array[] = $row;
}
header('Content-Type:application/json');
$json = json_encode($array);
echo $json;

?>
