<?php

$action = $_POST['action'];
if ($action == "create") {
    $naam = $_POST['naam'];
    if (empty($naam)) {
        $errors[] = "Vul een naam in.";
    }
    $titel = $_POST['titel'];
    if (empty($titel)) {
        $errors[] = "Vul een titel in.";
    }
    $beschrijving = $_POST['beschrijving'];
    if (empty($beschrijving)) {
        $errors[] = "Voer een beschrijving in.";
    }
    $afdeling = isset($_POST['afdeling']) ? $_POST['afdeling'] : null;
    if (empty($afdeling)) {
        $errors[] = "Kies een afdeling.";
    }

    //1. Verbinding
    require_once '../backend/conn.php';

    //2. Query
    $query = "INSERT INTO taken (naam, titel, beschrijving, afdeling) 
    VALUES(:naam, :titel, :beschrijving, :afdeling)";


    //3. Prepare
    $statement = $conn->prepare($query);


    //4. Execute
    $statement->execute([
        ":naam" => $naam,
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling" => $afdeling
    ]);

    header("Location: " . $base_url . "/index.php?msg=Taakopgeslagen");

}


if ($action == "update") {
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    if (empty($naam)) {
        $errors[] = "Vul een naam in.";
    }
    $titel = $_POST['titel'];
    if (empty($titel)) {
        $errors[] = "Vul een titel in.";
    }
    $beschrijving = $_POST['beschrijving'];
    if (empty($beschrijving)) {
        $errors[] = "Voer een beschrijving in.";
    }
    $afdeling = isset($_POST['afdeling']) ? $_POST['afdeling'] : null;
    if (empty($afdeling)) {
        $errors[] = "Kies een afdeling.";
    }

  
    require_once '../backend/conn.php';


    $query = "UPDATE taken SET naam = :naam, titel = :titel, beschrijving = :beschrijving, afdeling = :afdeling WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":naam" => $naam,
        ":titel" => $titel,
        ":beschrijving" => $beschrijving,
        ":afdeling" => $afdeling,
        ":id" => $id
    ]);

    header("Location: " . $base_url . "/index.php?msg=Taakgeupdate");
}


if ($action == "delete") {

    $id= $_POST['id'];

    require_once '../backend/conn.php';

    $query = "DELETE FROM taken WHERE id = :id";

    $statement = $conn->prepare($query);

    $statement ->execute([":id" => $id]);


    header("Location: " . $base_url . "/index.php?msg=TaakVerwijderd");

}








































?>