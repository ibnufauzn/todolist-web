<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    @include('sweetalert::alert')
    {{--  Navbar  --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container col-lg-6">
            <a class="navbar-brand" href="/">Todolist</a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link" href="{{ route('addTask') }}">Tambah Kegiatan</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown">
                        Kegiatan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">Daftar Kegiatan</a></li>
                        <li><a class="dropdown-item" href="/finish">Kegiatan Selesai</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="/logout">Logout</a>
                </li>

            </ul>
        </div>
    </nav>
    {{--  End of Navbar  --}}

    {{--  Content  --}}
    <div class="container col-lg-6 mt-2">
        @yield('content')
    </div>
    {{--  End of Content  --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
