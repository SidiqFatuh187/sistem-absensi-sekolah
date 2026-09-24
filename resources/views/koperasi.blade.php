<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Sekolah — SMK Negeri 1 Indralaya Selatan</title>
    <meta name="description" content="Koperasi Sekolah SMK Negeri 1 Indralaya Selatan — segera hadir, menyediakan alat tulis, seragam, dan produk hasil praktik siswa.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        ink: '#16233F',
                        navy: '#1E3A5F',
                        amber: '#E8A33D',
                        cream: '#F7F6F1',
                        slate: '#4B5563',
                        forest: '#1F7A46',
                    },
                    fontFamily: {
                        display: ['"Space Grotesk"', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; overflow-x: hidden; }
        .font-display { font-family: 'Space Grotesk', sans-serif; }
        .dot-grid {
            background-image: radial-gradient(#1E3A5F22 1.5px, transparent 1.5px);
            background-size: 18px 18px;
        }
        a:focus-visible, button:focus-visible {
            outline: 2px solid #E8A33D;
            outline-offset: 2px;
        }
    </style>
</head>
<body class="bg-cream text-ink antialiased">

    {{-- NAVBAR --}}
    <header class="sticky top-0 z-50 bg-cream/90 backdrop-blur border-b border-ink/10">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 flex items-center justify-between h-16 sm:h-20 gap-3">
            <a href="{{ url('/') }}" class="flex items-center gap-2 sm:gap-3 shrink-0 min-w-0">
                <span class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-ink flex items-center justify-center shrink-0">
                    <span class="font-display font-bold text-amber text-[9px] sm:text-[11px]">SMKN 1</span>
                </span>
                <span class="font-display font-semibold text-sm sm:text-lg leading-tight truncate">
                    <span class="hidden sm:inline">SMK Negeri 1 Indralaya Selatan</span>
                    <span class="sm:hidden">SMKN 1 Indralaya Sel.</span>
                </span>
            </a>

            <a href="{{ url('/') }}"
               class="inline-flex items-center gap-2 px-4 sm:px-5 py-2 sm:py-2.5 rounded-full border border-ink/20 text-xs sm:text-sm font-semibold text-ink hover:border-ink hover:bg-ink hover:text-cream transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Beranda
            </a>
        </nav>
    </header>

    {{-- HERO --}}
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 dot-grid opacity-60 pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-10 py-16 sm:py-24 relative text-center">
            <span class="inline-flex items-center gap-2 rounded-full bg-forest text-cream text-xs font-semibold px-4 py-1.5">
                Segera Hadir
            </span>
            <h1 class="font-display text-3xl sm:text-4xl lg:text-5xl font-semibold text-ink mt-5 leading-tight">
                Koperasi Sekolah
            </h1>
            <p class="mt-4 text-slate text-sm sm:text-base lg:text-lg max-w-xl mx-auto leading-relaxed">
                SMK Negeri 1 Indralaya Selatan sedang menyiapkan koperasi sekolah sebagai wadah
                praktik kewirausahaan siswa sekaligus penyedia kebutuhan sehari-hari warga sekolah.
                Halaman ini akan diperbarui begitu koperasi resmi beroperasi.
            </p>
        </div>
    </section>

    {{-- KATEGORI RENCANA --}}
    <section class="bg-white border-y border-ink/10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 py-14 sm:py-20">
            <h2 class="font-display text-xl sm:text-2xl font-semibold text-ink text-center mb-10">
                Rencana Kategori Produk
            </h2>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach ([
                    ['title' => 'Alat Tulis & Kebutuhan Sekolah', 'desc' => 'Buku, pulpen, dan perlengkapan belajar harian siswa.'],
                    ['title' => 'Seragam & Atribut', 'desc' => 'Seragam sekolah, dasi, badge, dan atribut resmi lainnya.'],
                    ['title' => 'Produk Hasil Praktik Siswa', 'desc' => 'Karya dari program keahlian, seperti produk elektronik sederhana hingga hasil perikanan.'],
                    ['title' => 'Jajanan & Minuman', 'desc' => 'Kebutuhan konsumsi ringan sehari-hari di lingkungan sekolah.'],
                ] as $kategori)
                    <div class="bg-cream border border-ink/10 rounded-2xl p-5 sm:p-6">
                        <span class="inline-block w-8 h-1.5 rounded-full bg-forest mb-4"></span>
                        <h3 class="font-display font-semibold text-ink text-sm sm:text-base leading-snug">{{ $kategori['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate mt-2 leading-relaxed">{{ $kategori['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- GALERI FOTO --}}
    <section class="bg-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 py-14 sm:py-20">
            <h2 class="font-display text-xl sm:text-2xl font-semibold text-ink text-center mb-3">
                Galeri Koperasi
            </h2>
            <p class="text-sm text-slate text-center max-w-xl mx-auto mb-10 leading-relaxed">
                cuplikan suasana dan produk koperasi sekolah. Foto resmi akan ditampilkan di sini
                setelah koperasi beroperasi.
            </p>

            <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                @foreach ([
                    ['label' => 'Ruang Usaha', 'icon' => 'M3 12l9-9 9 9M5 10v10a1 1 0 001 1h3m10-11v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'bg' => 'from-ink to-navy'],
                    ['label' => 'Rak Alat Tulis', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253', 'bg' => 'from-navy to-ink'],
                    ['label' => 'Display Seragam', 'icon' => 'M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2M5 7h14a1 1 0 011 1v11a1 1 0 01-1 1H5a1 1 0 01-1-1V8a1 1 0 011-1z', 'bg' => 'from-forest to-ink'],
                    ['label' => 'Produk Praktik Siswa', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z', 'bg' => 'from-amber to-ink'],
                    ['label' => 'Kasir & Layanan', 'icon' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z', 'bg' => 'from-navy to-forest'],
                    ['label' => 'Suasana Koperasi', 'icon' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z', 'bg' => 'from-ink to-forest'],
                ] as $foto)
                    <figure class="relative rounded-2xl overflow-hidden border border-ink/10 bg-gradient-to-br {{ $foto['bg'] }} aspect-[4/3] group">
                        <div class="absolute inset-0 dot-grid opacity-20"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center gap-2 p-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 sm:w-8 sm:h-8 text-cream/80" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="{{ $foto['icon'] }}" />
                            </svg>
                            <figcaption class="text-[11px] sm:text-xs font-semibold text-cream/90 leading-snug">
                                {{ $foto['label'] }}
                            </figcaption>
                        </div>
                        <span class="absolute top-2.5 right-2.5 rounded-full bg-cream/90 text-ink text-[9px] font-bold uppercase tracking-wider px-2 py-0.5">
                                Segera
                        </span>
                    </figure>
                @endforeach
            </div>
        </div>
    </section>

    {{-- JAM OPERASIONAL & LOKASI --}}
    <section class="bg-white border-y border-ink/10">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-10 py-14 sm:py-20">
            <h2 class="font-display text-xl sm:text-2xl font-semibold text-ink text-center mb-10">
                Jam Operasional & Lokasi
            </h2>

            <div class="grid md:grid-cols-2 gap-4 sm:gap-6">
                {{-- Jam Operasional --}}
                <div class="bg-cream border border-ink/10 rounded-2xl p-5 sm:p-7">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-9 rounded-full bg-ink flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                        <h3 class="font-display font-semibold text-ink text-base sm:text-lg">
                            Jam Operasional
                        </h3>
                    </div>

                    <ul class="divide-y divide-ink/10 text-sm">
                        @foreach ([
                            ['day' => 'Senin – Kamis', 'hour' => '07.00 – 15.00', 'active' => true],
                            ['day' => 'Jumat', 'hour' => '07.00 – 11.30', 'active' => true],
                            ['day' => 'Sabtu', 'hour' => '08.00 – 12.00', 'active' => true],
                            ['day' => 'Minggu & Hari Libur', 'hour' => 'Tutup', 'active' => false],
                        ] as $jam)
                            <li class="flex items-center justify-between gap-3 py-3">
                                <span class="text-slate {{ $jam['active'] ? '' : 'italic' }}">{{ $jam['day'] }}</span>
                                <span class="font-semibold {{ $jam['active'] ? 'text-ink' : 'text-slate/70' }} text-right">
                                    {{ $jam['hour'] }}
                                </span>
                            </li>
                        @endforeach
                    </ul>

                    <p class="mt-4 text-xs text-slate leading-relaxed">
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-forest align-middle mr-1.5"></span>
                        Di luar jam sekolah, koperasi dapat dibuka berdasarkan pengawasan guru piket.
                    </p>
                </div>

                {{-- Lokasi --}}
                <div class="bg-cream border border-ink/10 rounded-2xl p-5 sm:p-7 flex flex-col">
                    <div class="flex items-center gap-3 mb-5">
                        <span class="w-9 h-9 rounded-full bg-ink flex items-center justify-center shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <h3 class="font-display font-semibold text-ink text-base sm:text-lg">
                            Lokasi Koperasi
                        </h3>
                    </div>

                    <div class="rounded-xl border border-ink/10 bg-white p-4 sm:p-5 flex-1">
                        <p class="font-semibold text-ink text-sm sm:text-base leading-snug">
                            SMK Negeri 1 Indralaya Selatan
                        </p>
                        <p class="text-sm text-slate mt-1.5 leading-relaxed">
                            Gedung Koperasi / Aula Sekolah,<br>
                            Kabupaten Ogan Ilir, Sumatera Selatan
                        </p>

                        <div class="mt-4 pt-4 border-t border-ink/10 space-y-2.5 text-sm">
                            <div class="flex items-start gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-forest shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                                <span class="text-slate">Lantai 1, ruang di samping aula sekolah</span>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-forest shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="text-slate">Pengelola: Guru & Siswa Program Kewirausahaan</span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('/') }}#kontak"
                       class="mt-4 inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full border border-ink/20 text-sm font-semibold text-ink hover:border-ink hover:bg-ink hover:text-cream transition-colors">
                        Tanya Info Koperasi
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- INFO --}}
    <section class="bg-cream">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-10 py-14 sm:py-20 text-center">
            <div class="rounded-2xl bg-ink text-cream p-6 sm:p-8">
                <p class="text-xs uppercase tracking-[0.2em] text-amber font-semibold mb-3">Info Lebih Lanjut</p>
                <p class="text-sm sm:text-base text-cream/85 leading-relaxed">
                    Katalog produk lengkap, katalog harga, dan pengumuman grand opening akan
                    diumumkan melalui halaman ini dan media informasi sekolah lainnya.
                </p>
            </div>

            <a href="{{ url('/') }}#kontak"
               class="mt-8 inline-flex items-center gap-2 px-6 py-3 rounded-full bg-forest text-cream text-sm font-semibold hover:bg-forest/90 transition-colors">
                Hubungi Sekolah
            </a>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-white border-t border-ink/10">
        <p class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-6 text-xs text-slate text-center">
            © {{ date('Y') }} SMK Negeri 1 Indralaya Selatan — Tajam, Tangguh, Terpuji. Semua hak dilindungi.
        </p>
    </footer>
</body>
</html>