<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotecari</title>
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
            max-width: 800px;
        }
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .home-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .home-btn:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <?php
    include './connectToDB.php';

    // Recupero i dati di tutti i bibliotecari
    $query = "SELECT * from bibliotecari";
    $exec = $conn->query($query);

    if ($exec->rowCount() > 0) {

    while ($result = $exec->fetch(PDO::FETCH_ASSOC)) {
        $results[] = $result;
    }

    // Mostra i risultati
    echo "<h2>Informazioni Bibliotecari</h2>";
    echo "<table>";
    echo "<tr><th>Username</th><th>Nome</th><th>Email</th><th>Password</th></tr>";
    foreach ($results as $r) {
        echo "<tr><td>" . $r['username'] . "</td><td>" . $r['nome'] . "</td><td>" . $r['email'] . "</td><td>" . $r['psw'] . "</td></tr>";
    }
    echo "</table>";
    
    echo '<a href="index.php" class="home-btn">Torna alla Home</a>';
    } else {
        echo "Nessun bibliotecario trovato.";
    }
    ?>
    </body>
</html>
