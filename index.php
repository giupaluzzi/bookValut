<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookVault - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .header {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px 20px;
        }
        .login {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }
        .login:hover {
            background-color: #218838;
        }
        .login i {
            margin-right: 5px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        label {
            margin-right: 10px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            max-width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="header">
        <a href="login.php" class="login"><i class="fas fa-sign-in-alt"></i> Login</a>
    </div>
    <h1>Benvenuto su BookVault</h1>
    <form method="get" action="search.php">
        <input type="text" id="input" name="titolo" placeholder="Inserisci il nome del libro">
        <input type="submit" value="Cerca">
    </form>
</body>
</html>
