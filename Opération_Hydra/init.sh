#!/bin/bash

# Crée l'utilisateur uniquement s'il n'existe pas
if ! id "agent_hydra" &>/dev/null; then
    useradd -m -s /bin/bash agent_hydra
    echo "agent_hydra:123456" | chpasswd
    echo "FLAG{hYdRa_Acc3ss_Gr@nted}" > /home/agent_hydra/flag.txt
    chown agent_hydra:agent_hydra /home/agent_hydra/flag.txt
    chmod 600 /home/agent_hydra/flag.txt
fi

# Démarre SSHD en mode bloquant
exec /usr/sbin/sshd -D
