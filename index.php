<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<header>

<?php require_once "components/header.php" ?>
</header>

<body>
<div class="box1">
 <div class="item1"><a href="tasks/create.php">Ga naar form</a></div>

    <?php if (isset($_GET['msg'])) {
        echo "<div class='msg'>" . $_GET['msg'] . "</div>";
    } ?>
   <div class="item2"><p>welkom op onze homepage!</p></div> 
    </div>
</body>

</html>