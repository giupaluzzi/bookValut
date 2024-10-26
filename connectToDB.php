<?php
    $host = 'mysql';
    $dbname = 'bookVaultDB';
    $username = 'giuseppe';
    $password = 'psw';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo("Connessione fallita: " . $e->getMessage());
    }

?>