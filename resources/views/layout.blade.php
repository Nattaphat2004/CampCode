<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | BLUE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme=dark>>
        <div class="container-fluid">
            <a class="navbar-brand" href="/">BLUE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">บทความทั้งหมด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">เขียนบทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about')}}">เกี่ยวกับเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-2">
        @yield('content')

    </div>


</body>

</html>
