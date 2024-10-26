<?php
include './connectToDB.php';

if (isset($_GET['titolo'])) {
    // Prendo il valore inserito nel form di ricerca
    $titolo = $_GET['titolo'];
    try{
        if ($titolo=="") {
            // Costruisco la query
            $query = "SELECT * FROM libri";
            // Eseguo la query
            $exec = $conn->query($query);
        } else {
            // Costruisco la query
            $query = "SELECT * FROM libri WHERE titolo = '$titolo'";
            // Eseguo la query
            $exec = $conn->query($query);
        }

        if ($exec) {
            $result = $exec->fetchAll(PDO::FETCH_ASSOC);
            include './libri.php';
        } else {
            echo "<p>Nessun libro trovato</p>";
        }
    } catch(PDOException $e) {
        echo "Errore durante l'esecuzione della query: " . $e->getMessage();
    }
}
?>