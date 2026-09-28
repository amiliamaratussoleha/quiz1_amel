<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Polinema PSDKU Pamekasan')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- my header -->
    <header class="navbar">
        <div class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Polinema">
            <div>
                <strong>Polinema PSDKU</strong>
                <span>Pamekasan</span>
            </div>
        </div>
        <nav class="navbar-menu">
            <a href="{{ route('kampus') }}" class="active">
                Beranda
            </a>
            <a href="{{ route('tentang') }}">
                Tentang
            </a>
            <a href="#">Program Studi</a>
            <a href="#">Fasilitas</a>
            <a href="#">Kontak</a>
        </nav>
    </header>

    <!--ini nanti isi nya-->
    <main>
        @yield('content')
    </main>

    <!-- ini footerku-->
    <footer class="footer">
        <p>&copy; 2026 Politeknik Negeri Malang PSDKU Pamekasan</p>
    </footer>

</body>

</html>