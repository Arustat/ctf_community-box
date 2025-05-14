<?php
// download.php
if (isset($_COOKIE['file_access'])) {
    $token = $_COOKIE['file_access']; // Récupère le token du cookie
    setcookie("file_access", $token, time() + 3600, "/"); // Récupère le cookie pour la validation

    // Simulation de l'image téléchargée
    header('Content-Description: File Transfer');
    header('Content-Type: image/jpeg');
    header('Content-Disposition: attachment; filename="secret.jpg"');
    readfile('secret.jpg');
    exit;
} else {
    http_response_code(403);
    echo "<h1>Accès refusé. Le cookie est manquant ou invalide.</h1>";
}
