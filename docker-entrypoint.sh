#!/bin/bash
if [ -z "$APP_KEY" ] || [[ ! "$APP_KEY" =~ ^base64: ]]; then
    php artisan key:generate --force
fi
php artisan config:cache
exec "$@"
