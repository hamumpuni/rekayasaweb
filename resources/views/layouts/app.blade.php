<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KSO TIMAS-PRATIWI')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0A1628;
            --accent: #C8A96E;
            --accent-light: #E8C98A;
            --white: #F9F5EE;
            --gray: #6B7280;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--white);
            color: var(--primary);
        }
        h1, h2, h3, h4 { font-family: 'Playfair Display', serif; }

        /* NAVBAR */
        .navbar {
            background: var(--primary) !important;
            padding: 1rem 0;
            border-bottom: 2px solid var(--accent);
        }
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--accent) !important;
            font-weight: 900;
            letter-spacing: 1px;
        }
        .navbar-brand span { color: var(--white); }
        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            font-weight: 500;
            letter-spacing: 0.5px;
            padding: 0.5rem 1.2rem !important;
            transition: color 0.3s;
        }
        .nav-link:hover, .nav-link.active {
            color: var(--accent) !important;
        }
        .nav-link.active {
            border-bottom: 2px solid var(--accent);
        }

        /* FOOTER */
        footer {
            background: var(--primary);
            color: rgba(255,255,255,0.7);
            padding: 3rem 0 1.5rem;
            border-top: 2px solid var(--accent);
        }
        footer h5 {
            color: var(--accent);
            font-family: 'Playfair Display', serif;
            margin-bottom: 1rem;
        }
        footer a { color: rgba(255,255,255,0.6); text-decoration: none; }
        footer a:hover { color: var(--accent); }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 1rem;
            margin-top: 2rem;
            font-size: 0.85rem;
        }

        /* BUTTONS */
        .btn-gold {
            background: var(--accent);
            color: var(--primary);
            font-weight: 700;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.85rem;
            transition: all 0.3s;
        }
        .btn-gold:hover {
            background: var(--accent-light);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(200,169,110,0.3);
        }
        .btn-outline-gold {
            border: 2px solid var(--accent);
            color: var(--accent);
            background: transparent;
            font-weight: 700;
            padding: 0.75rem 2rem;
            border-radius: 0;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.85rem;
            transition: all 0.3s;
        }
        .btn-outline-gold:hover {
            background: var(--accent);
            color: var(--primary);
        }

        /* SECTION TITLE */
        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--accent);
            margin-top: 0.5rem;
        }
        .section-label {
            font-size: 0.8rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--accent);
            font-weight: 600;
        }
    </style>
    @yield('styles')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex flex-column justify-content-center" href="{{ url('/') }}" style="text-decoration: none;">
    <!-- Teks Utama (Besar) -->
    <span style="font-family: 'Playfair Display', serif; font-size: 1.5rem; font-weight: bold; color: #ffffff;">
        KSO <span style="color: #c8a96e;">TIMAS-PRATIWI</span>
    </span>
    <!-- Teks Konsorsium (Kecil di bawahnya) -->
    <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 0.65rem; color: #e5e1da; letter-spacing: 1px; text-transform: uppercase; margin-top: -2px; opacity: 0.8;">
        Konsorsium PT Timas Suplindo - PT Pratiwi Putri Sulung
    </span>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter:invert(1)"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('tentang') ? 'active' : '' }}" href="{{ url('/tentang') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('layanan') ? 'active' : '' }}" href="{{ url('/layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('berita*') ? 'active' : '' }}" href="{{ url('/berita') }}">Berita</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- FOOTER -->
<footer class="pt-5 pb-4" style="background-color: #0f1d31; color: #e5e1da; border-top: 2px solid #c8a96e;">
    <div class="container">
        <div class="row g-4 justify-content-between">
            
            <div class="col-12 col-lg-4">
                <h5 style="color: #c8a96e; font-family: 'Playfair Display', serif; font-weight: bold; letter-spacing: 1px;">
                    KSO TIMAS-PRATIWI
                </h5>
                <p class="small mt-3" style="opacity: 0.8; line-height: 1.6;">
                    Konsorsium PT Timas Suplindo - PT Pratiwi Putri Sulung.<br>
                    Mitra strategis terpercaya dalam memberikan solusi terpadu untuk proyek EPCIC yang andal dan efisien.
                </p>
            </div>

            <div class="col-12 col-md-4 col-lg-2">
                <h5 style="color: #c8a96e; font-family: 'Playfair Display', serif; font-weight: bold;">Menu</h5>
                <ul class="list-unstyled mt-3 small" style="line-height: 2;">
                    <li><a href="{{ url('/') }}" class="text-decoration-none text-light" style="opacity: 0.8; transition: 0.3s;" onmouseover="this.style.color='#c8a96e'; this.style.opacity='1';" onmouseout="this.style.color=''; this.style.opacity='0.8';">Beranda</a></li>
                    <li><a href="{{ url('/tentang-kami') }}" class="text-decoration-none text-light" style="opacity: 0.8; transition: 0.3s;" onmouseover="this.style.color='#c8a96e'; this.style.opacity='1';" onmouseout="this.style.color=''; this.style.opacity='0.8';">Tentang Kami</a></li>
                    <li><a href="{{ url('/layanan') }}" class="text-decoration-none text-light" style="opacity: 0.8; transition: 0.3s;" onmouseover="this.style.color='#c8a96e'; this.style.opacity='1';" onmouseout="this.style.color=''; this.style.opacity='0.8';">Layanan</a></li>
                    <li><a href="{{ url('/berita') }}" class="text-decoration-none text-light" style="opacity: 0.8; transition: 0.3s;" onmouseover="this.style.color='#c8a96e'; this.style.opacity='1';" onmouseout="this.style.color=''; this.style.opacity='0.8';">Berita</a></li>
                    <li><a href="{{ url('/kontak') }}" class="text-decoration-none text-light" style="opacity: 0.8; transition: 0.3s;" onmouseover="this.style.color='#c8a96e'; this.style.opacity='1';" onmouseout="this.style.color=''; this.style.opacity='0.8';">Kontak</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-4 col-lg-3">
                <h5 style="color: #c8a96e; font-family: 'Playfair Display', serif; font-weight: bold;">Kontak</h5>
                <ul class="list-unstyled mt-3 small" style="line-height: 1.8; opacity: 0.8;">
                    <li class="d-flex mb-3">
                        <i class="bi bi-geo-alt me-2 mt-1" style="color: #c8a96e;"></i>
                        <span>Jl. Raya Casablanca, Jakarta Selatan</span>
                    </li>
                    <li class="d-flex mb-3">
                        <i class="bi bi-telephone me-2 mt-1" style="color: #c8a96e;"></i>
                        <span>0895606108094</span>
                    </li>
                    <li class="d-flex">
                        <i class="bi bi-envelope me-2 mt-1" style="color: #c8a96e;"></i>
                        <span>info@pps.com</span>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-md-4 col-lg-2">
                <h5 style="color: #c8a96e; font-family: 'Playfair Display', serif; font-weight: bold;">Ikuti Kami</h5>
                <div class="d-flex gap-3 mt-3">
                    <a href="#" class="text-light" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#c8a96e';" onmouseout="this.style.color='';"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#c8a96e';" onmouseout="this.style.color='';"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-light" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#c8a96e';" onmouseout="this.style.color='';"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-light" style="font-size: 1.2rem; transition: 0.3s;" onmouseover="this.style.color='#c8a96e';" onmouseout="this.style.color='';"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

        </div>

        <hr style="border-color: rgba(200, 169, 110, 0.3); margin-top: 2rem; margin-bottom: 1.5rem;">
        <div class="text-center small" style="opacity: 0.6;">
            © 2026 KSO TIMAS-PRATIWI. All Rights Reserved.
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>