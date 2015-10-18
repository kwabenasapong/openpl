#!/bin/bash

NIKOLA=`which nikola`
if [[ -f "nikola" ]]; then
    NIKOLA="./nikola"
fi
$NIKOLA clean
$NIKOLA build
cd output
rsync -r -a -v -z -e ssh * openlp@openlp.org:public_html/
cd ..
