<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">AD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/tour" class="nav-link">Kuliner</a></li>
                <li class="nav-item"><a href="/hotel" class="nav-link">Hotel</a></li>
                <li class="nav-item"><a href="/tiket" class="nav-link">Tiket</a></li>
                <li class="nav-item"><a href="" class="nav-link">Grafik</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>

                @auth
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <li><button type="submit" class="dropdown-item">Log Out</button></li>
                            </form>
                        </ul>
                    </div>
                @else
                    <li class="nav-item cta"><a href="{{ route('login') }}" class="nav-link"><span>Sign In</span></a></li>

                @endauth

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
