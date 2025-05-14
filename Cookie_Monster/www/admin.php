<?php
// admin.php
if (!isset($_COOKIE['file_access']) || $_COOKIE['file_access'] !== 'authorized') {
    http_response_code(403);
    echo "<h1>Accès refusé</h1>";
    echo "<p>Vous devez d'abord télécharger l'image pour obtenir le cookie valide.</p>";
    exit;
}

echo "<h1>Bienvenue dans l'admin !</h1>";
echo "<h2>Flag : FLAG_CHOCO</h2>";
?>
