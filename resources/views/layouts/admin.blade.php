<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - KSO TIMAS-PRATIWI')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        body { 
            background-color: #f4f6f9; /* Warna abu-abu sangat terang untuk area konten */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        
        /* --- SIDEBAR STYLING --- */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0f1d31; /* Tema Navy */
            padding-top: 20px;
            box-shadow: 4px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .sidebar-brand {
            color: #c8a96e; /* Tema Gold */
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }
        .sidebar-menu a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px 25px;
            transition: all 0.3s ease;
            font-size: 1rem;
        }
        .sidebar-menu a i {
            margin-right: 15px;
            font-size: 1.2rem;
        }
        .sidebar-menu a:hover, .sidebar-menu a.active {
            background-color: #c8a96e;
            color: #0f1d31;
            font-weight: bold;
            border-left: 5px solid #ffffff;
        }

        /* --- MAIN CONTENT STYLING --- */
        .main-wrapper {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar-admin {
            background-color: #ffffff;
            height: 70px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }
        .content-area {
            padding: 30px;
            flex: 1;
        }
        
        /* Tombol & Elemen Bawaan */
        .text-gold { color: #c8a96e; }
        .bg-navy { background-color: #0f1d31; color: #fff; }
        .btn-navy { background-color: #0f1d31; color: #c8a96e; }
        .btn-navy:hover { background-color: #c8a96e; color: #0f1d31; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            KSO TIMAS-PRATIWI
        </div>
        <div class="sidebar-menu">
            <a href="{{ url('/admin/dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>
            
            <p class="text-uppercase mt-4 mb-2 px-4" style="color: #6c757d; font-size: 0.75rem; letter-spacing: 1px;">Kelola Konten</p>
            
            <a href="{{ route('berita.index') }}" class="{{ Request::is('admin/berita*') ? 'active' : '' }}">
                <i class="bi bi-newspaper"></i> Artikel / Berita
            </a>
            <a href="{{ route('profil.index') }}" class="{{ Request::is('admin/profil*') ? 'active' : '' }}">
                <i class="bi bi-building"></i> Profil Perusahaan
            <a href="{{ route('layanan.index') }}" class="{{ Request::is('admin/layanan*') ? 'active' : '' }}">
                 <i class="bi bi-tools"></i> Produk / Layanan</a>
           <a href="{{ route('galeri.index') }}" class="{{ Request::is('admin/galeri*') ? 'active' : '' }}">
                 <i class="bi bi-images"></i> Galeri</a>
        </div>
    </div>

    <div class="main-wrapper">
        
        <div class="navbar-admin">
            <div>
                <h5 class="mb-0 text-muted" style="font-family: 'Playfair Display', serif;">Administrator Panel</h5>
            </div>
            <div class="d-flex align-items-center">
                <span class="me-3 fw-bold" style="color: #0f1d31;">
                    <i class="bi bi-person-circle fs-5 me-1 text-gold"></i> 
                    {{ Auth::user()->name }}
                </span>
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin keluar dari sistem?');">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <div class="content-area">
            @yield('content')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>