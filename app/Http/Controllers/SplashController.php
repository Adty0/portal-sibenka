<?php

namespace App\Http\Controllers;

use App\Models\SystemSetting;
use App\Models\SystemFeature;
use Illuminate\Http\Request;

class SplashController extends Controller
{
    /**
     * Menampilkan halaman splash animasi video layar penuh dan menu interaktif
     */
    public function index()
    {
        $settings = SystemSetting::first();
        $features = SystemFeature::orderBy('order_num', 'asc')->get();
        $videoPath = 'video/splash_video.mp4';

        return view('splash', compact('settings', 'features', 'videoPath'));
    }

    /**
     * Menyajikan halaman Login SIBENKA langsung ke dalam iframe tanpa terblokir X-Frame-Options
     */
    public function sibenkaFrame(Request $request)
    {
        $url = 'https://sibenka-skagata.onrender.com/login';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');
        $html = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (!$html || $httpCode >= 400) {
            return redirect()->away($url);
        }

        // Sisipkan base href agar seluruh aset relatif tersambung sempurna ke host Render
        if (stripos($html, '<head>') !== false) {
            $html = str_ireplace('<head>', "<head>\n    <base href=\"https://sibenka-skagata.onrender.com/\">", $html);
        }

        // Pastikan target form login terbuka di tab penuh jika user menekan tombol login,
        // sehingga navigasi dashboard autentikasi berjalan lancar
        $html = str_replace(
            '<form method="POST"',
            '<form target="_blank" method="POST"',
            $html
        );

        return response($html)
            ->header('Content-Type', 'text/html; charset=utf-8')
            ->header('X-Frame-Options', 'ALLOWALL')
            ->header('Content-Security-Policy', "frame-ancestors 'self' *");
    }
}
