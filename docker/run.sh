#!/bin/sh
# script that is run by docker each time container starts

/add-host-domain.sh

#service cron start
service apache2 start

tail -F /var/log/container.log # need running process to keep container alive

