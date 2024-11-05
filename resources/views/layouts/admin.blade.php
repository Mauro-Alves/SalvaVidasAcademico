<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salva Visas Acadêmico</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Ícone</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosso-diferencial">Nosso Diferencial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Como Funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">O Que Fazemos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Dúvidas</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success" type="submit">Área do Aluno</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="{{ 'js/popper.min.js' }}"></script>
    <script src="{{ 'js/bootstrap.min.js' }}"></script>
    <script src="{{ 'js/fontawesome_all.js' }}"></script> 
    
    @yield('content')

</body>

</html>
