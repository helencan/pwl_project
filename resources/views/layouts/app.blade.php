<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWL Project</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40">
        </a>

        <!-- Tombol menu saat layar kecil -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Isi Navbar -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Menu kiri -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}"
                       href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">

                        Menu

                    </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{ route('dosen.index') }}">Dosen</a></li>

                        <li><a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>

                        <li><a class="dropdown-item" href="{{ route('jurusan.index') }}">Jurusan</a></li>

                        <li><a class="dropdown-item" href="{{ route('matakuliah.index') }}">Mata Kuliah</a></li>

                        <li><a class="dropdown-item" href="{{ route('kelas.index') }}">Kelas</a></li>

                        <li><a class="dropdown-item" href="{{ route('krs.index') }}">KRS</a></li>

                    </ul>

                </li>

            </ul>

            <!-- Menu kanan -->
            <ul class="navbar-nav ms-auto">

                @guest

                    <li class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                @endguest

                @auth

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle"
                           href="#"
                           role="button"
                           data-bs-toggle="dropdown">

                            {{ Auth::user()->name }}

                        </a>

                        <ul class="dropdown-menu dropdown-menu-end">

                            <li>

                                <form action="{{ route('logout') }}" method="POST">

                                    @csrf

                                    <button type="submit" class="dropdown-item">
                                        Logout
                                    </button>

                                </form>

                            </li>

                        </ul>

                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>