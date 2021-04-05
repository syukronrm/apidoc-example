#!/bin/bash

while true; do

inotifywait -e modify,create,delete -r . && \
apidoc -e ./vendor -e ./apidoc -o apidoc

done
