<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd">
    <div class="container-fluid">
{{--        <a class="navbar-brand" href=" {{ URL::to('/') }}">Dashboard</a>--}}
            <a class="navbar-brand" href=" {{ route('home') }}">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Link</a>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Impresoras
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
{{--                        <li><a class="dropdown-item" href="{{route('')}} ">Consumibles</a></li>--}}
                        <li><a class="dropdown-item" href="{{ route('index') }} ">Toner</a></li>

                        <li><a class="dropdown-item" href=" {{ route('contadores') }}">Contadores</a></li>
{{--                        <li><a class="dropdown-item" href=" {{ route('contadores') }}">Contadores</a></li>--}}

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('tonerreg') }}">Toner Inventario</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>--}}
</nav>
