<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StoringApp / Meldingen / Aanpassen</title>
    <?php require_once '../components/head.php'; ?>
</head>

<body>
    <?php
    // Check if the id is provided
    if (!isset($_GET['id'])) {
        echo "Geef in je aanpaslink op de index.php het id van betreffende item mee achter de URL in je a-element om deze pagina werkend te krijgen na invoer van je vijfstappenplan";
        exit;
    }
    ?>

    <?php require_once '../components/header.php'; ?>

    <div class="container">
        <h1>Melding aanpassen</h1>

        <?php
        // Get the id from the URL
        $id = $_GET['id'];

        // Connect to the database
        require_once '../backend/conn.php';

        // Prepare and execute the query to fetch the specific melding
        $query = "SELECT * FROM taken WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([':id' => $id]);

        // Fetch the data
        $taak = $statement->fetch(PDO::FETCH_ASSOC);
        ?>

        <form action="../../../app/Http/Controllers/meldingenController.php" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-group">
                <label>Naam:</label>
                <input type="text" name="naam" id="naam" class="form-input"
                    value="<?php echo $taak['naam']; ?>">
            </div>
            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" id="titel" class="form-input"
                    value="<?php echo $taak['titel']; ?>">
            </div>
            <div class="form-group">
                <label for="beschrijving">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" class="form-input"
                    rows="4"><?php echo $taak['beschrijving']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="afdeling">Afdeling:</label>
                <input type="text" name="afdeling" id="afdeling" class="form-input"
                    value="<?php echo $taak['afdeling']; ?>">
            </div>

            <input type="submit" value="Melding opslaan">
        </form>

        <form action="../../../app/Http/Controllers/meldingenController.php" method="POST" style="margin-top: 10px;">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Verwijderen" onclick="return confirm('Weet u zeker dat u deze melding wilt verwijderen?');">
        </form>
    </div>

    <div class="container">
        <h2>Overzicht van Taken</h2>

        <?php
        // Query to fetch all tasks
        $query = "SELECT * FROM taken";
        $statement = $conn->prepare($query);
        $statement->execute();
        $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Titel</th>
                    <th>Beschrijving</th>
                    <th>Afdeling</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($taken as $taak): ?>
                <tr>
                    <td><?php echo $taak['id']; ?></td>
                    <td><?php echo $taak['naam']; ?></td>
                    <td><?php echo $taak['titel']; ?></td>
                    <td><?php echo $taak['beschrijving']; ?></td>
                    <td><?php echo $taak['afdeling']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
