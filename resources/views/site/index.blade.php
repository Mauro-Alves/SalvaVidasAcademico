@extends('layouts.admin')

@section('content')
    <div class="p-1" id="inicio">
    </div>
    <div class="container-fluid">

        {{-- Início --}}
        <div class=" container my-3 text-end pt-5">
            <h1 class="">Salva Vidas Acadêmico</h1>
        </div>
        <div class="container my-3 text-end">
            <h5>Trabalhos acadêmicos em geral</h5>
        </div>

        <hr>

        <div class="row justify-content-md-center">

            <div class="col-md-4 my-3 mx-5">
                No Salva Vidas Acadêmico, estamos aqui para facilitar sua trajetória acadêmica e garantir que cada projeto
                atenda ao máximo de potencial. Nosso compromisso é oferecer suporte completo em todas as etapas do
                desenvolvimento de TCC, artigos, monografias, teses, e demais demandas. Nossa equipe qualificada oferece um
                atendimento humanizado e personalizado, atendendo às suas necessidades com precisão e pontualidade. Desde
                revisão e correção textual até elaboração de resumos, resenhas, slides e planilhas, o Salva Vidas Acadêmico
                é seu apoio confiável para alcançar resultados de excelência e manter-se seguro nos desafios da vida
                acadêmica. Conte conosco para transformar suas ideias em projetos únicos e de alta qualidade.
            </div>

            <div class="col-md-auto col-4 my-3">
                <img src="{{ 'imagem/imagem.png' }}" alt="">
            </div>

        </div>

        <div id="nosso-diferencial"></div>

        <hr>

        {{-- Diferencial --}}
        <div class="container">

            <div class="col-md-auto col-8 my-5">
                <div class="my-3 text-center">
                    <h2>Nosso Diferencial</h2>
                    <br>
                </div>

                <div class="row justify-content-md-center my-4">

                    <div class="col-md-3 icon-box">

                        <div>
                            <h5><i class="fa-brands fa-rocketchat"></i> Atendimento Humanizado</h5>
                            <p>Nosso compromisso é oferecer um atendimento próximo e personalizado, entendendo a
                                individualidade de cada projeto. Desde o primeiro contato, buscamos entender suas
                                necessidades e garantir que você se sinta acolhido e seguro em todo o processo, priorizando
                                uma comunicação transparente e direta. Com a nossa equipe, você encontra apoio e orientação
                                em cada etapa.
                            </p>

                        </div>

                    </div>

                    <div class="d-flex col-md-1 justify-content-center">
                        <div class="vr"></div>
                    </div>


                    <div class="col-md-3 icon-box ml-2">

                        <div>
                            <h5><i class="fa-regular fa-calendar-check"></i> Respeito ao Prazo</h5>
                            <p>Reconhecemos a importância de prazos para o sucesso de seus projetos e metas. Nossa equipe
                                trabalha com planejamento e organização para entregar seu material no tempo certo,
                                priorizando agilidade e qualidade. O respeito aos prazos é um dos nossos maiores
                                compromissos para que você conte sempre conosco.
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-md-center my-4">
                    <div class="col-md-3 icon-box">

                        <div>
                            <h5><i class="fa-solid fa-file-circle-check "></i> Trabalhos Exclusívos</h5>
                            <p>Cada trabalho que desenvolvemos é único, feito com atenção aos detalhes e totalmente
                                personalizado conforme as suas especificações. Valorizamos a originalidade e o valor de um
                                trabalho exclusivo, que reflete suas ideias e objetivos. Conte conosco para materiais
                                autênticos e sob medida.
                            </p>
                        </div>
                    </div>


                    <div class="d-flex col-md-1 justify-content-center">
                        <div class="vr"></div>
                    </div>

                    <div class="col-md-3 icon-box">

                        <div>
                            <h5><i class="fa-solid fa-magnifying-glass"></i> Análise Antiplágio</h5>
                            <p>A integridade do seu conteúdo é essencial para nós. Realizamos uma análise completa de
                                antiplágio em todos os materiais, garantindo originalidade e segurança. Utilizamos
                                ferramentas especializadas e uma revisão minuciosa para que cada trabalho seja inteiramente
                                autêntico e confiável.
                            </p>
                        </div>
                    </div>


                    <div class="d-flex col-md-1 justify-content-center">
                        <div class="vr"></div>
                    </div>

                    <div class="col-md-3 icon-box">

                        <div>
                            <h5><i class="fa-solid fa-user-group "></i> Equipe Especializada</h5>
                            <p>Nossa equipe é composta por profissionais qualificados e dedicados, que unem conhecimento e
                                experiência para oferecer o melhor serviço. Com expertise em diversas áreas, estamos prontos
                                para atender às suas necessidades com precisão e competência, garantindo sempre o mais alto
                                nível de qualidade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        {{-- Como Funciona --}}

        <div class="row justify-content-md-center">

            <div class="my-2 text-center">
                <h2>Como Funciona</h2>
                <br>
            </div>

            <div class="col-md-auto col-4 center mb-3">
                <img src="{{ 'imagem/features-3.png' }}" style="max-width: 40%" class="mx-auto d-block" alt="">
            </div>

            <div class="col-md-5 my-2 text-left">
                <div class="my-5">
                    <h5>Fácil de utilizar</h5>
                        
                    <ul>
                        <li><i class="bi bi-check"></i><span> Nos chame via WhatsApp .</span></li>
                        <li><i class="bi bi-check"></i> <span>Envie o tipo de trabalho de interesse.</span></li>
                        <li><i class="bi bi-check"></i> <span>Nos diga seu prazo e quantidade de páginas.</span></li>
                        <li><i class="bi bi-check"></i> <span>Converse com o especialista e tire suas dúvidas.</span></li>
                        <li><i class="bi bi-check"></i> <span>Escolha a melhor forma de pagamento.</span></li>
                        <li><i class="bi bi-check"></i> <span>Receba o trabalho para revisão e conclusão.</span></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
       

    </div>

    </div>

    </div>
@endsection
