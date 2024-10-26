<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati della ricerca</title>
    <style>
                body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            overflow-y: auto; 
            max-height: 600px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .result {
            text-align: left;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .result strong {
            font-size: 18px;
        }
        hr {
            margin: 10px 0;
        }
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }
        .back-btn:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <h1>Risultati della ricerca</h1>
    <div class="container">
        <?php
        include './connectToDB.php';

        if(isset($_GET['titolo'])) {
            $titolo = $_GET['titolo'];

            // Costruisco la query 
            if($titolo == "") {
                $query = "SELECT * FROM libri";
            } else {
                $query = "SELECT * FROM libri WHERE titolo = '$titolo'";
            }
            
            // Esegui la query
            $exec = $conn->query($query);

            // Verifica se la query è stata eseguita con successo
            if($exec) {
                // Ottieni i risultati
                while($result = $exec->fetch(PDO::FETCH_ASSOC)) {
                    // Mostra le informazioni di ogni libro trovato
                    echo '<div class="result">';
                    echo "<b>Libro:</b> " . $result['titolo'] . "<br>";
                    echo "Autore: " . $result['autore'] . "<br>";
                    echo "Anno: " . $result['anno'] . "<br>";
                    echo '</div>';
                }
            } else {
                echo "<p>Nessun libro trovato.</p>";
            }
        }
        ?>
    </div>
    <a href="index.php" class="back-btn">Torna alla Ricerca</a>
</body>
</html>
