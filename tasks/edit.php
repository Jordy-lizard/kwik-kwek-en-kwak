<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1>Taak aanpassen</h1>

        <?php

        $id = $_GET['id'];
        require_once '../backend/conn.php';
        $query = " SELECT * FROM taken WHERE id = :id ";
        $statement = $conn->prepare($query);
        $statement->execute([":id" => $id]);

        $taken = $statement->fetch(PDO::FETCH_ASSOC);


        ?>

        <form action="../backend/tasksController.php" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" name="naam" id="naam" class="form-input"
                    value="<?php echo $taken['naam']; ?>">
            </div>

            <div class="form-group">
                <label>titel Taak:</label>
                <input type="text" name="titel" id="titel" class="form-input" value="<?php echo $taken['titel'] ?>">
            </div>

            <div class="form-group">
                <label for="beschrijving">beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" class="form-input"
                    rows="4"><?php echo $taken['beschrijving'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="afdeling">afdeling</label>
                <select name="afdeling" id="afdeling">
                    <option value="<?php echo $taken['afdeling']; ?>"><?php echo $taken['afdeling']; ?></option>
                    <option value="personeel">personeel</option>
                    <option value="horeca">horeca</option>
                    <option value="techniek">techniek</option>
                    <option value="inkoop">inkoop</option>
                    <option value="klantenservice">klantenservice</option>
                    <option value="groen">groen</option>
                </select>
            </div>

            <input type="submit" value="Taak aanpassen">

            <form action="../../../app/Http/Controllers/meldingenController.php" method="POST" style="margin-top: 10px;">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Verwijderen" onclick="return confirm('Weet u zeker dat u deze melding wilt verwijderen?');">
        </form>




    </div>

</body>

</html>