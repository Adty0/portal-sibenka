@echo off
title Laravel Server - Portal Sibenka
echo ========================================================
echo   MENJALANKAN SERVER LARAVEL - PORTAL SIBENKA
echo ========================================================
echo.
echo Membuka browser ke http://127.0.0.1:8000 ...
start "" "http://127.0.0.1:8000"
echo.
echo Menjalankan php artisan serve (tekan Ctrl+C untuk berhenti)...
php artisan serve
if %ERRORLEVEL% NEQ 0 (
    echo.
    echo Terjadi kendala saat menjalankan php artisan serve.
    pause
)

