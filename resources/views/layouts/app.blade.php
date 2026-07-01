<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWL Project</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="70" height="70">
        </a>

        <!-- Home -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            Home
        </a>

        <!-- Menu -->
        <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button"
                data-bs-toggle="dropdown">
                Menu
            </button>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('dosen.index') }}">Dosen</a></li>
                <li><a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
                <li><a class="dropdown-item" href="{{ route('jurusan.index') }}">Jurusan</a></li>
                <li><a class="dropdown-item" href="{{ route('matakuliah.index') }}">Mata Kuliah</a></li>
                <li><a class="dropdown-item" href="{{ route('kelas.index') }}">Kelas</a></li>
                <li><a class="dropdown-item" href="{{ route('krs.index') }}">KRS</a></li>
            </ul>
        </div>

    </div>
</nav>

<div class="container mt-3">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>