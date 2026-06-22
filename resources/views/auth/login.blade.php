<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator - KSO TIMAS-PRATIWI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f9f7f2; }
        .card-login { border: none; border-top: 4px solid #c8a96e; box-shadow: 0 10px 30px rgba(15, 29, 49, 0.1); }
        .btn-navy { background-color: #0f1d31; color: #c8a96e; font-weight: bold; letter-spacing: 1px; transition: 0.3s; }
        .btn-navy:hover { background-color: #c8a96e; color: #0f1d31; }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card card-login p-4">
                    <div class="card-body text-center">
                        
                        <h3 class="mb-1" style="color: #0f1d31; font-family: 'Playfair Display', serif; font-weight: bold;">Login Admin</h3>
                        <p class="text-muted small mb-4">Sistem Manajemen Konten KSO TIMAS-PRATIWI</p>

                        <!-- Notifikasi Error Login -->
                        @if ($errors->any())
                            <div class="alert alert-danger py-2 small text-start">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form Login -->
                        <form action="{{ url('/login') }}" method="POST" class="text-start">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Email Address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus placeholder="admin@pps.com">
                            </div>
                            <div class="mb-4">
                                <label class="form-label small fw-bold" style="color: #0f1d31;">Password</label>
                                <input type="password" name="password" class="form-control" required placeholder="••••••••">
                            </div>
                            <button type="submit" class="btn btn-navy w-100 py-2">LOGIN KE SISTEM</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>