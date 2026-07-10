#!/bin/bash
rm -f /var/www/html/.env

if [ -z "$APP_KEY" ] || [[ ! "$APP_KEY" =~ ^base64: ]]; then
    php artisan key:generate --force
fi
php artisan config:cache
exec "$@"
