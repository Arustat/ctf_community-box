# Opération Hydra - CTF Challenge

**Challenge Type**: Pentest  
**Difficulté**: Easy 
**Auteurs**: Arustat
**Docker Image**: [arustat/operation_hydra](https://hub.docker.com/r/arustat/operation_hydra)

## Description du Challenge

Dans ce CTF, vous devez infiltrer un réseau espion pour récupérer des informations sur une organisation criminelle. L'objectif est d'accéder à une machine via SSH et de trouver le **flag** caché.

### Contexte

Un serveur SSH a été configuré pour permettre l'accès d'un utilisateur malveillant. Vous devrez récupérer un **flag.txt** stocké dans le répertoire de l'utilisateur une fois que vous aurez compromis l'accès au serveur.

---

## Prérequis

- Docker installé sur votre machine (version 19.03 ou supérieure).
- Accès à internet pour télécharger l'image Docker depuis Docker Hub.

---

## Lancer l'image Docker

1. **Cloner ou télécharger ce repository** :
    ```bash
    https://github.com/Arustat/ctf_community-box/edit/main/Op%C3%A9ration_Hydra
    cd operation_hydra
    ```

2. **Construire et démarrer l'image Docker** :
    ```bash
    docker-compose up --build -d
    ```

    Cela va lancer le conteneur en arrière-plan et exposer le port SSH sur `localhost:2222`.

---

## Objectif

1. **Accédez au répertoire de l'utilisateur **.
2. **Trouvez le fichier `flag.txt`**.
3. **Obtenez le flag qui est contenu dans le fichier**. 

---

## Dépannage

- Si le conteneur ne se lance pas ou que vous avez un problème avec la connexion SSH, assurez-vous que vous avez suivi les étapes dans l'ordre et que Docker est configuré correctement sur votre machine.
- Si le conteneur est démarré mais que vous ne pouvez pas vous connecter, essayez de vérifier les logs du conteneur avec :
    ```bash
    docker logs hydra_ctf
    ```

---

## Contributeurs

- Arustat - Création du challenge

---

## License

Ce projet est sous la **licence MIT**.
