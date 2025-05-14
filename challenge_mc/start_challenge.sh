EXISTING_CONTAINER=$(docker ps -q --filter ancestor=hackconnect/challenge_mc)
if [ ! -z "$EXISTING_CONTAINER" ]; then
    docker stop $EXISTING_CONTAINER
fi

docker run -d -p 25565:25565 hackconnect/challenge_mc

echo "Le challenge a démarré. Bonne chance !"