$existingContainer = docker ps -q --filter ancestor=hackconnect/challenge_mc
if ($existingContainer) {
    docker stop $existingContainer
}

docker run -d -p 25565:25565 hackconnect/challenge_mc

Write-Host "Le challenge a démarré. Bonne chance !"