<link rel="stylesheet" href="../css/header.css">
<?php require_once __DIR__ . "/../backend/config.php"; ?>

<header>
    <div class="logoHdr">
<img src="../img/logo-big-v4.png" alt="sorryyy ik heb je img opgegeten" height="50px" width="175px">
    </div>

    <div class="container">
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">Home</a> 
            <a href="<?php echo $base_url; ?>/tasks/taken.php">taken</a>
            <a href="<?php echo $base_url; ?>/tasks/done.php">done</a>
        </nav>
        
    </div>
</header>
