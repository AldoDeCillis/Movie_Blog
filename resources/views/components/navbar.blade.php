<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Test</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('article.index') }}">Indice</a>
                </li>
                <div class="text-white nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="{{ route('register') }}" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu nav-item">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>

            @guest
                <div class="nav-item text-white pe-5">
                    <a class="nav-link active" href="{{ route('login') }}">Accedi</a>
                </div>
            @else
                <div class="nav-item text-white pe-5">
                    <a class="nav-link active" href="{{ route('revisor.become') }}">Lavora Con Noi</a>
                </div>
                <div class="text-white nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="{{ route('register') }}" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu nav-item">
                        @if (Auth::user()->is_revisor == true)
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{ App\Models\Article::toBeRevisionedCount() }}
                                <span class="visually-hidden">Messaggi non letti</span>
                            </span>
                            <li><a class="dropdown-item" href="{{route('revisor.index')}}">Revision Area</a></li>
                        @endif
                        <li><a class="dropdown-item" href="#">Profilo</a></li>
                        <li><a class="dropdown-item" href="{{ route('article.create') }}">Aggiungi Articolo</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a onclick="event.preventDefault(); document.querySelector('#form-logout').submit()"
                                class="dropdown-item">
                                Logout <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">
                                    @csrf </form>
                            </a>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>
