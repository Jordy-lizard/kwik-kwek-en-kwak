<?php require_once '../head.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="create.php" method="post">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam">

        <label for="titel">Titel:</label>
        <input type="text" id="titel" name="titel">

        <label for="beschrijving">Beschrijving:</label>
        <textarea id="beschrijving" name="beschrijving" rows="4" cols="50"></textarea>

        <label for="afdeling">Afdeling:</label>
        <select id="afdeling" name="afdeling">
            <option value="personeel">personeel</option>
            <option value="horeca">horeca</option>
            <option value="techniek">techniek</option>
            <option value="inkoop">inkoop</option>
            <option value="klantenservice">klantenservice</option>
            <option value="groen">groen</option>
        </select>

        <button type="submit">Verstuur</button>
    </form>
    
</body>
</html>
