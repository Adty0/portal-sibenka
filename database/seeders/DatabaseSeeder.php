<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;
use App\Models\SystemSetting;
use App\Models\SystemFeature;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Data Anggota Tim Sesuai Google Drive & Divisi
        $members = [
            // --- TIM DEVELOPMENT ---
            [
                'name' => 'Nur Aditya Romadhon, S.Kom.',
                'division' => 'Tim Development',
                'role' => 'Lead Developer',
                'image_path' => 'images/nur_aditya.jpeg',
                'drive_url' => 'https://lh3.googleusercontent.com/d/14eL6sE3uKbDQ_vfKbxPHNYZssHQcn0n0=w1200',
                'order_num' => 1,
                'is_placeholder' => false,
            ],
            [
                'name' => 'Yodi Irawan, S.Pd.',
                'division' => 'Tim Development',
                'role' => 'Frontend & UI Integrator',
                'image_path' => 'images/yodi_irawan.png',
                'drive_url' => 'https://lh3.googleusercontent.com/d/10ZCGeGVoHCtedxDrUV-Xk47_9aA5aTHu=w1200',
                'order_num' => 2,
                'is_placeholder' => false,
            ],
            [
                'name' => 'Adi Chandra Winata, S.Pd.',
                'division' => 'Tim Development',
                'role' => 'Fullstack & Database Engineer',
                'image_path' => 'images/adi_chandra.jpg',
                'drive_url' => 'https://lh3.googleusercontent.com/d/16BwWcgvxEYc0InPMazPpKPpYfWROebR3=w1200',
                'order_num' => 3,
                'is_placeholder' => false,
            ],
            [
                'name' => 'Rayhan Pangestu Wibowo, S.Pd.',
                'division' => 'Tim Development',
                'role' => 'UI/UX & Quality Assurance',
                'image_path' => 'images/rayhan_pangestu.jpg',
                'drive_url' => 'https://lh3.googleusercontent.com/d/1QhwiFrf3XUdYeYFm9if_fuwatccXZTIs=w1200',
                'order_num' => 4,
                'is_placeholder' => false,
            ],

            // --- TIM DOKUMEN & LAPORAN ---
            [
                'name' => 'Fajar Alamsyah, S.Kom.',
                'division' => 'Tim Dokumen & Laporan',
                'role' => 'Koordinator Dokumentasi & Pelaporan',
                'image_path' => 'images/fajar_alamsyah.jpg',
                'drive_url' => 'https://lh3.googleusercontent.com/d/1cLmmqkTDkptWqTA1AblsQ-ETFJfI53cW=w1200',
                'order_num' => 5,
                'is_placeholder' => false,
            ],
            [
                'name' => 'Arkan Bhanu Kurniadi, S.Pd.',
                'division' => 'Tim Dokumen & Laporan',
                'role' => 'Penyusunan Laporan & Analisis Data',
                'image_path' => 'images/arkan_bhanu.jpg',
                'drive_url' => 'https://lh3.googleusercontent.com/d/1gwsV0Z6AL_qhzJlD31zFneXp3uC4IwxS=w1200',
                'order_num' => 6,
                'is_placeholder' => false,
            ],
            [
                'name' => 'Anggota Tim Dokumen (Slot 1)',
                'division' => 'Tim Dokumen & Laporan',
                'role' => 'Staff Administrasi & Pelaporan',
                'image_path' => null,
                'drive_url' => null,
                'order_num' => 7,
                'is_placeholder' => true,
            ],
            [
                'name' => 'Anggota Tim Dokumen (Slot 2)',
                'division' => 'Tim Dokumen & Laporan',
                'role' => 'Staff Dokumentasi & Publikasi',
                'image_path' => null,
                'drive_url' => null,
                'order_num' => 8,
                'is_placeholder' => true,
            ],
        ];

        foreach ($members as $m) {
            TeamMember::create($m);
        }

        // 2. Pengaturan Sistem
        SystemSetting::create([
            'app_title' => 'SISTEM SIBENKA',
            'badge_text' => 'Projek Kepemimpinan • PPG Calon Guru',
            'page_title' => 'STRUKTUR TIM',
            'page_subtitle' => 'Kolaborasi & Pembagian Peran Mahasiswa PPG dalam Pengembangan Sistem Sibenka',
            'menu_subtitle' => 'Selamat datang di pusat informasi dan layanan Sistem Sibenka. Silakan pilih menu di bawah ini:',
            'website_url' => 'https://sibenka-skagata.onrender.com',
            'about_system' => 'Sibenka merupakan inisiatif sistem digital inovatif yang dikembangkan sebagai bagian dari Projek Kepemimpinan mahasiswa Pendidikan Profesi Guru (PPG). Sistem ini dirancang untuk memfasilitasi pendataan, kolaborasi, dan visualisasi capaian pembelajaran serta kepemimpinan di lingkungan pendidikan.',
            'urgency_text' => 'Proyek ini bertujuan mengintegrasikan kepemimpinan transformasional dengan teknologi tepat guna. Dengan Sibenka, seluruh proses pemantauan, koordinasi tim, dan publikasi hasil proyek dapat diakses secara transparan, terstruktur, dan efisien oleh pemangku kepentingan maupun masyarakat luas.',
            'auto_return_seconds' => 30,
        ]);

        // 3. Fitur Unggulan
        $features = [
            [
                'icon' => '⚡',
                'title' => 'Antarmuka Interaktif',
                'description' => 'Desain modern, responsif, dan mudah dioperasikan di semua perangkat.',
                'order_num' => 1,
            ],
            [
                'icon' => '📊',
                'title' => 'Visualisasi Dokumentasi',
                'description' => 'Galeri foto dan video aktivitas aksi nyata yang terarsip secara sistematis.',
                'order_num' => 2,
            ],
            [
                'icon' => '🤝',
                'title' => 'Ruang Kolaborasi',
                'description' => 'Wadah sinergi antarmahasiswa PPG, guru pamong, dan sekolah mitra.',
                'order_num' => 3,
            ],
            [
                'icon' => '🔒',
                'title' => 'Terintegrasi Cloud',
                'description' => 'Akses penyimpanan awan terintegrasi untuk stabilitas data jangka panjang.',
                'order_num' => 4,
            ],
        ];

        foreach ($features as $f) {
            SystemFeature::create($f);
        }
    }
}
