<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php require_once "components/header.php" ?>
    <a href="tasks/create.php">Form</a>

    <?php if (isset($_GET['msg'])) {
        echo "<div class='msg'>" . $_GET['msg'] . "</div>";
    } ?>
</body>

</html>