#!/bin/bash
cat > /var/www/html/.env << 'EOF'
APP_ENV=production
APP_DEBUG=false
APP_URL=https://invitacion-tarot.onrender.com
DB_CONNECTION=sqlite
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
EOF

if [ -n "$APP_KEY" ] && [[ "$APP_KEY" =~ ^base64: ]]; then
    echo "APP_KEY=$APP_KEY" >> /var/www/html/.env
else
    php artisan key:generate --force
fi

php artisan config:cache
echo "APP_URL cached as: $(php artisan config:get app.url)"
exec "$@"
