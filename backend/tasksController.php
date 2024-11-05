<?php

$action = $_POST['action'];
if($action == "create"){
    $taak = $_POST['taak'];
    if(empty($taak)){
        $errors[]="Vul een taak in.";
    }
    $naam = $_POST['naam'];
    if(empty($naam)){
        $errors[]="Vul een naam in.";
    }
    $beschrijving = $_POST['beschrijving'];
    if(empty($beschrijving)){
        $errors[]="Voer een beschrijving in.";
    }
    
}

if($action == "move"){

}

if($action == "delete"){

}








































?>