<?php

$action = $_POST['action'];
if($action == "create"){
    $naam = $_POST['naam'];
    if(empty($naam)){
        $errors[]="Vul een naam in.";
    }
    $titel = $_POST['titel'];
    if(empty($titel)){
        $errors[]="Vul een titel in.";
    }
    $beschrijving = $_POST['beschrijving'];
    if(empty($beschrijving)){
        $errors[]="Voer een beschrijving in.";
    }
    $afdeling = isset($_POST['afdeling']) ? $_POST['afdeling'] : null;
    if (empty($afdeling))
    {
        $errors[] = "Kies een afdeling.";
    }
    
    //1. Verbinding
    require_once '../backend/conn.php';

    //2. Query
    $query = "INSERT INTO taken (titel, naam,beschrijving, afdeling) 
    VALUES(:titel, :naam, :beschrijving, :afdeling)";

    //3. Prepare
    $statement = $conn->prepare($query);
    

    //4. Execute
    $statement->execute([
        ":titel" => $titel,
        ":afdeling" => $afdeling,
        ":beschrijving" => $beschrijving,
        ":naam" => $naam
    ]);

    header("Location: " . $base_url . "/tasks/index.php?msg=Taakopgeslagen");

}

if($action == "edit"){}


if($action == "delete"){

}








































?>