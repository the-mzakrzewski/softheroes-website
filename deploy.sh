#!/bin/bash

git pull origin main
npm ci
npm run build
npm prune --production
composer install --no-dev --optimize-autoloader --no-interaction
php artisan optimize
