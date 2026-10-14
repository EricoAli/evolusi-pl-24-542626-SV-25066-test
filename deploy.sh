#!/usr/bin/env bash

set -e

# Trigger ulang workflow untuk verifikasi CI/CD

# 1. Aktifkan maintenance mode
php artisan down --retry=60

# 2. Ambil kode terbaru
git pull origin main

# 3. Pasang dependencies tanpa paket development
composer install --no-dev --optimize-autoloader

# 4. Jalankan migration
php artisan migrate --force

# 5. Bangun cache dengan kode dan config baru
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 6. Restart worker queue
php artisan queue:restart

# 7. Buka kembali aplikasi
php artisan up

