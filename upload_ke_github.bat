@echo off
title Upload ke GitHub - Adty0/portal-sibenka
echo ========================================================
echo   UPLOAD PROYEK PORTAL SIBENKA KE GITHUB (Adty0)
echo ========================================================
echo.

cd /d "%~dp0"

echo 1. Menyiapkan remote repository GitHub...
git remote remove origin >nul 2>&1
git remote add origin https://github.com/Adty0/portal-sibenka.git

echo 2. Menyimpan perubahan terbaru...
git add .
git commit -m "feat: Siap hosting Laravel di GitHub & Render" >nul 2>&1

echo 3. Mengirim (push) ke GitHub main branch...
echo    (Jika muncul jendela browser/popup, klik 'Sign in with your browser')
echo.
git push -u origin main

if %ERRORLEVEL% EQU 0 (
    echo.
    echo ========================================================
    echo   BERHASIL DI-UPLOAD KE GITHUB!
    echo   Repositori: https://github.com/Adty0/portal-sibenka
    echo ========================================================
    echo.
) else (
    echo.
    echo ========================================================
    echo   Catatan: Pastikan repositori sudah dibuat di:
    echo   https://github.com/new?name=portal-sibenka
    echo ========================================================
    echo.
)

pause
