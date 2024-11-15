<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php require_once '../components/header.php'; ?>

    <?php
    require_once '../backend/conn.php';
    $query = "select * from taken";
    $statement = $conn->prepare(($query));
    $statement->execute();
    $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>naam</th>
            <th>titel</th>
            <th>beschrijving</th>
            <th>afdeling</th>
        </tr>
        <?php foreach ($taken as $taak ) ?>
        <tr>
        <td><?php echo $taak['id'] ?></td>
        <td><?php echo $taak['naam'] ?></td>
        <td><?php echo $taak['titel'] ?></td>
        <td><?php echo $taak['beschrijving'] ?></td>
        <td><?php echo $taak['afdeling'] ?></td>
        <td><a href="edit.php?id=<?php echo $taak['id'] ?>">aanpassen</a></td>
        </tr>

    </table>

</body>

</html>