<?php
// index.php
// Génère un token aléatoire à utiliser comme cookie
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['download'])) {
    $cookieValue = bin2hex(random_bytes(16)); // Génère un token unique aléatoire
    setcookie("file_access", $cookieValue, time() + 3600, "/"); // Valable pendant 1 heure
    header('Location: download.php'); // Redirige vers le script de téléchargement
    exit;
}

// Redirige vers admin.php si l'utilisateur essaie d'accéder à /admin
if ($_SERVER['REQUEST_URI'] == '/admin') {
    header("Location: /admin.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Image - Téléchargement Sécurisé</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }
        .content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #45a049;
        }
        h2 {
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Galerie Image - Téléchargement Sécurisé</h1>
    </header>

    <div class="container">
        <div class="content">
            <h2>Bienvenue sur notre galerie d'images exclusives</h2>
            <p>Pour accéder aux images de la galerie, vous devez d'abord obtenir un accès valide.</p>
            <p>Cliquez sur le bouton ci-dessous pour télécharger l'image :</p>
            <a href="?download=true" class="button">Télécharger l'image exclusive</a>
        </div>
    </div>
</body>
</html>
