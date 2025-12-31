#!/bin/bash

git pull origin main
npm install
npm run build
npm prune --omit=dev
composer install --no-dev --optimize-autoloader --no-interaction
php artisan optimize
