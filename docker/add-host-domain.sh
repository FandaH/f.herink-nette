#!/usr/bin/env bash
if [ ! -z "$ADD_HOST_DOMAIN" ] && [ "$ADD_HOST_DOMAIN" == "1" ]
then
  if [ ! -z "$HOST_DOCKER_INTERNAL" ]
  then
    echo "HOST_DOCKER_INTERNAL env var is beeing used"
    echo -e "$HOST_DOCKER_INTERNAL\thost.docker.internal" >> /etc/hosts # uses exported eviromental variable for domain resolution
  else
    echo -e "`/sbin/ip route|awk '/default/ { print $3 }'`\thost.docker.internal" >> /etc/hosts # uses docker default network gateway
  fi

  echo "host.docker.internal domain added to hosts file"
fi
