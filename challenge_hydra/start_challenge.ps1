$existingContainer = docker ps -q --filter ancestor=hackconnect/challenge_hydra
if ($existingContainer) {
    docker stop $existingContainer
}

docker run -d -p 2222:22 hackconnect/challenge_hydra

Write-Host "Le challenge a démarré sur le port 2222. Bonne chance !"