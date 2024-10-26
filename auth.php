<?php
    include './connectToDB.php';

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    try{
        // Costruisco la query
        $query = "SELECT * FROM bibliotecari WHERE username = '$username' AND psw = '$password'";

        // Eseguo la query
        $exec = $conn->query($query);

        if ($exec->rowCount() > 0) {
            header('Location: areaRiservata.php');
            exit;
        } else {
            header('Location: login.php?error=1');
            exit;
        }
    } catch(PDOException $e) {
        echo "Errore di autenticazione: " . $e->getMessage();
    }
?>