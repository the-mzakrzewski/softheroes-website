#!/bin/bash

git pull origin main
pnpm install
pnpm run build
pnpm prune --prod
composer install --no-dev --optimize-autoloader --no-interaction
php artisan optimize
