#!/bin/bash

server="jenkinssmartitpa@51.91.102.150"

ssh -tt -o StrictHostKeyChecking=yes $server '

cd /mnt/home2/jenkinssmartitpa/public_html

unzip app.zip

rm -r app.zip 

'
