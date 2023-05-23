<header class="container">
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo" href="#">Gs111</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosso Pessoal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Suporte</a>
                </li>
            </ul>
        </div>
    </nav> --}}
    <style>
        .nav-item a {
            color: black
        }

        .logo a {
            text-decoration: none;
            color: black
        }
    </style>
    {{-- <nav class="col-12">
        <div class="row">
            <div class="col-3 my-4 logo" style="font-size: 25px;">
                <a href="{{ route('home') }}">Gs111</a>
            </div>
            <div class="col-9 my-4" style="font-size: 20px;">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('pessoal') }} ">Nosso Pessoal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('sobre') }} ">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('contato') }} ">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('suporte') }} ">Suporte</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}

    <nav class="navbar navbar-light bg-light">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('pessoal') }} ">Nosso Pessoal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('sobre') }} ">Sobre Nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('contato') }} ">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('suporte') }} ">Suporte</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="logo">
                <a href="{{ route('home') }}">Gs111</a>
            </div>
            <button style="outline: none;"class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
