#!/usr/bin/env bash

cd /workspace/web
echo "sleeping for 3s"
sleep 3
php -m
../vendor/bin/drush pm-list --debug
