<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <marquee behavior="" direction="">Ini adalah contoh read dan export data dari database Microsoft SQL
            Server dengan
            teknologi PHP Laravel ORM. created by <a href="http://github.com/kikukeii" target="_blank"
                rel="noopener noreferrer">Miftakhuddin Falaki</a> 4 Maret 2024</marquee>
    </div>
    <header>
        <div class="px-3 py-2 text-bg-dark border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <i class="bi bi-file-earmark-text-fill fs-1"></i> Sample Data
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="{{ url('/') }}" class="nav-link text-white">
                                <i class="bi bi-database"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/pasien') }}" class="nav-link text-white">
                                <i class="bi bi-person"></i>
                                Pasien
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/dokter') }}" class="nav-link text-white">
                                <i class="bi bi-bandaid-fill"></i>
                                Dokter
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/ruang') }}" class="nav-link text-white">
                                <i class="bi bi-door-open-fill"></i>
                                Ruang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
