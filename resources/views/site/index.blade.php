@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center align-items-center flex-wrap">

        {{-- Início --}}

        {{-- <div class="my-3 text-end">
            <h2 style="font-family: Courgette; margin-top: 75px">Salva Vidas Acadêmico</h2>
        </div> --}}

        <hr>

        <div style="margin-top: 65px" class="row justify-content-md-center">

            <div class="col-md-5 my-3 mx-5">
                <P><strong style="font-family: Courgette; font-size: 1.4em">Transforme sua trajetória acadêmica com o Salva Vidas Acadêmico!</strong></P>
                <br>
                <p style="font-size: 1.1em">Oferecemos suporte completo e personalizado para TCCs, monografias, artigos e mais. Nossa equipe qualificada
                garante precisão, pontualidade e excelência, desde a revisão textual até a criação de resumos, slides e
                planilhas.</p>
                <br>
                <strong style="font-family: Courgette; font-size: 1.4em">Seu parceiro para superar desafios e alcançar o
                    máximo potencial!</strong>
            </div>

            <div class="col-md-auto col-4 my-3">
                <img class="rounded-3" src="{{ 'imagem/ImagemInicialRed.png' }}" alt="">
            </div>

            <div id="nosso-diferencial"></div>

            <hr class="mt-5">


        </div>

        <div class="container">

            {{-- Diferencial --}}
            <div class="col-md-auto col-8 my-4">
                <div class="my-2 text-center">
                    <h2 style="font-family: Courgette">Nosso Diferencial</h2>
                    <br>
                </div>

                <div class="row top-cards g-4 px-4 justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100" style="background-color: #E8E8E8">

                            <div class="card-body text-center">

                                <i class="fa-brands fa-rocketchat fa-xl mb-2"></i>
                                <h5>Atendimento Humanizado</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100" style="background-color: #E8E8E8">

                            <div class="card-body text-center">

                                <i class="fa-regular fa-calendar-check fa-xl mb-2"></i>
                                <h5>Respeito ao Prazo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100" style="background-color: #E8E8E8">

                            <div class="card-body text-center">
                                <i class="fa-solid fa-file-circle-check fa-xl mb-2"></i>
                                <h5>Trabalhos Exclusívos</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100" style="background-color: #E8E8E8">

                            <div class="card-body text-center">
                                <i class="fa-solid fa-magnifying-glass fa-xl mb-2"></i>
                                <h5>Análise Antiplágio</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card h-100" style="background-color: #E8E8E8">

                            <div class="card-body text-center">
                                <i class="fa-solid fa-user-group fa-xl mb-2"></i>
                                <h5>Equipe Especializada</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="como-funciona"></div>

                <hr class="mt-5">

                

            </div>



            {{-- Como Funciona --}}

            <div class="row justify-content-md-center">

                <div class="my-2 text-center">
                    <h2 style="font-family: Courgette">Como Funciona</h2>
                    <br>
                </div>

                <div class="col-md-auto col-4 center mb-3">
                    <img src="{{ 'imagem/features-3.png' }}" style="max-width: 40%" class="mx-auto d-block" alt="">
                </div>

                <div class="col-md-5 my-2 text-left">
                    <div class="my-1">
                        <h5>Fácil de utilizar</h5>
                        <ul>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i><span> Nos chame via
                                    WhatsApp.</span></a> <br>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i> <span>Envie o tipo de
                                    trabalho de interesse.</span></a> <br>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i> <span>Nos diga seu
                                    prazo e quantidade de páginas.</span></a> <br>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i> <span>Converse com o
                                    especialista e tire suas dúvidas.</span></a> <br>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i> <span>Escolha a melhor
                                    forma de pagamento.</span></a> <br>
                            <a><i class="fa-regular fa-square-check" style="color: #7f65ae;"></i> <span>Receba o
                                    trabalho para revisão e conclusão.</span></a> <br>
                        </ul>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                            <a href="#link" class="btn btn-success rounded-5 fs-3" role="button"><i
                                    class="fa-brands fa-whatsapp ms-2"></i> Fale Conosco Agora<span
                                    class="ms-2"></span></a>
                        </div>
                    </div>
                </div>



                <hr class="mt-5">
            </div>

            {{-- Forma de pagamento --}}
            <div id="forma-pagamento"></div>

            <div class="row justify-content-center my-5">
                <div class="col-md-8">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #E4CDA1;">
                            <h2 class="my-3" style="font-family: Courgette;">Forma de Pagamento</h2>
                        </div>
                        <div class="card-body" style="background-color: #E8E8E8;">
                            <h5 class="card-title fs-4 my-2">
                                <strong><i class="fas fa-money-bill-wave me-3"></i>Opções de Pagamento Flexíveis<i class="fas fa-credit-card ms-3"></i></strong></h5>
                            <p class="card-text my-2">Pague seu trabalho à vista ou divida em até 6x no cartão de crédito</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
