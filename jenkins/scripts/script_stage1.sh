#!/bin/bash

server="jenkinssmartitpa@51.91.102.150"

ssh -tt -o StrictHostKeyChecking=yes $server '

rm -rf *

'


