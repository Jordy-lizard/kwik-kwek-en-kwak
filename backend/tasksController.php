<?php

require_once "conn.php";
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute();
$user = $statement->fetchAll(PDO::FETCH_ASSOC);

?>