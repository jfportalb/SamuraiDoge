#!/usr/bin/env bash
cp .env.example .env
composer install
php artisan key:generate
bower install