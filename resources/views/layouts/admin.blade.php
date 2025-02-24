<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salva Vidas Acadêmico</title>
    <link rel="icon" type="image/x-icon" href="{{ 'imagem/favicon.ico' }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

</head>

<body style="background-color: #F5E9E2">

    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #FDECE4">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img style="width: 60px; margin-right: 10px;" src="{{ 'imagem/icone.png' }}" alt="">
                </a>
                <h2 style="font-family: Courgette; margin: 0;">Salva Vidas Acadêmico</h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto fs-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#nosso-diferencial">Nosso Diferencial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#como-funciona">Como Funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#forma-pagamento">Forma de Pagamento</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Dúvidas</a>
                    </li> --}}
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

    {{-- Footer --}}
    <div class="container">

        <hr class="mt-2">

        <footer class="py-3">
            <div class="row">
                <div class="col-4 mb-3 d-flex flex-wrap align-items-center">
                    <a href="/" class="mb-3 text-decoration-none">
                        <img style="width: 120px" src="{{ 'imagem/icone.png' }}" style="max-width: 30%"
                            class="d-block align-middle rounded-2" alt="">
                    </a>
                </div>

                <div class="col-md-4 mb-3">
                    <h5 class="mb-4">Fale Conosco</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                                    class="fa-brands fa-whatsapp"></i> 11 98264-1599</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"><i
                                    class="fa-regular fa-envelope"></i> bruna@salvavidasacademico.com.br</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 mb-3">
                    <h5 class="mb-4">Endereço</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Rua Mandú,
                                207</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#"
                                class="nav-link p-0 text-body-secondary">Penha/SP</a>
                        </li>
                    </ul>
                </div>

                <hr class="">

            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between mb-2">
                <p>&copy; 2024 MauroAlves.eng.br. Todos os direitos reservados.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"><i class="fa-brands fa-facebook"></i></a>
                    </li>

                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>

                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>

                    <li class="ms-3">
                        <a class="link-body-emphasis" href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis" href="#"><i class="fa-brands
                </ul>
            </div>
        </footer>
    </div>

</body>

</html>
