FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && \
    apt-get install -y openssh-server sudo && \
    mkdir /var/run/sshd

COPY init.sh /init.sh
RUN chmod +x /init.sh

EXPOSE 22
CMD ["/init.sh"]
