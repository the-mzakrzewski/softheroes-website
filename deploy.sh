#!/bin/bash

git pull origin main
npm ci
npm run build
composer install --no-dev --optimize-autoloader --no-interaction
php artisan optimize
