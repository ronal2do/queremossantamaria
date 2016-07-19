<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>QUEREMOS SANTA MARIA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css" />

  </head>
  <body>

    <section class="Header">
        <div class="container Flex Amarelo">

            <div class="">
                <p class="Queremos">QUEREMOS</p>
            </div>
            <div class="">
                <div class="Peoples"></div>
            </div>

        </div>
    </section>

    <div class="container" >
        <div class="fundo">
            <img src="./assets/image/fundo.png" alt="tarcisio" class="waves-image" width="100%">
        </div>
    </div>

    <div class="container">

        <div class="panel-group" id="accordion">

          <div class="panel panel-default Red">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"> 
                    <h4 class="panel-title">
                        Queremos! <br>
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse1" class="panel-collapse collapse"> <!--collapse in -->
                <div class="panel-body">
                    <p>Queremos mais por Santa Maria. Queremos trabalhar 
                        e construir o futuro que está no coração e na boca do povo, 
                        em reivindicações e ações participativas com prioridades que favoreçam nossa cidade de forma inclusiva. Queremos olhar 
                        e seguir em frente reconhecendo o que de bom foi feito no passado e fazendo o que deve ser feito no presente. 
                        Queremos um futuro melhor.  
                        Vamos fazer juntos a Santa Maria que queremos deixar para as nossas futuras gerações!
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default Red">
            <div class="panel-heading ">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> 
                    <h4 class="panel-title Strong">
                        A Santa Maria que queremos <br>
                        vai seguir avançando 
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="Strong">Queremos uma Santa Maria atenciosa, protetora, 
                        inclusiva e cuidadosa com as pessoas. </p>
                    <p class="Texto">
                        Prevalecerá uma presença respeitosa do governo nos bairros 
                        e na vida dos seus moradores. Uma relação próxima e 
                        servidora com melhorias e avanços nas políticas e nos serviços públicos para atender a contento as demandas e as 
                        necessidades urgentes da população. Atenção, proteção 
                        e cuidados na Saúde, Educação, Segurança e demais áreas essenciais, e no dia a dia dos jovens, das mulheres, dos 
                        idosos, entre outros segmentos, em respeito à cidadania 
                        e à diversidade.

                    </p>
                    <p class="Strong">Queremos uma Santa Maria sustentável, 
                        com oportunidades e desenvolvimento aliado 
                        à qualidade de vida. 
                    </p>

                    <p class="Texto">
                        Prevalecerá o compromisso com o futuro de Santa Maria, 
                        o de identificar vocações, incentivar o empreendedorismo 
                        e promover o desenvolvimento econômico com a geração 
                        de riquezas, postos de trabalho e renda, sem abrir mão da 
                        sustentabilidade, da responsabilidade social e da qualidade 
                        de vida da população.
                    </p>
                    <p class="Strong">Queremos uma Santa Maria receptiva, com infraestrutura de convivência e mobilidade urbana.</p>
                    <p class="Texto">
                        Prevalecerá a visão de fazer uma cidade funcional e acolhedora, com equipamentos e espaços urbanos que promovam 
                        encontros, lazer e bem-estar, melhorando a mobilidade urbana com equipamentos confortáveis, obras e intervenções que 
                        encurtem o tempo e a distância.
                    </p>
                    <p class="Strong">Queremos uma Santa Maria acessível, com informação, transparência e eficiência na gestão.</p>
                    <p class="Texto">
                        Prevalecerá a verdade que a eficiência da administração passa, necessariamente, pelo controle social e pela participação 
                        da população, desde a aplicação dos recursos à fiscalização 
                        da qualidade dos serviços públicos prestados.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default Red">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> 
                    <h4 class="panel-title">
                        Participe com ideias <br>
                        e transforme nosso futuro!
                    </h4>
                    <span class="Line"></span>                  
                </a>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body" data-ng-app="vcFazSbc">
                        <p>
                            <form class="form-horizontal" role="form" action="/api/contact" method="POST" name="form">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                        <input type="text" class="form-control" 
                                            name="nome" 
                                            data-ng-model="nome" 
                                            placeholder="Nome"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12"> 
                                        <input type="text" class="form-control" 
                                            name="endereco" 
                                            data-ng-model="endereco" 
                                            placeholder="Endereço"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                        <input type="email" class="form-control" 
                                            name="email" 
                                            data-ng-model="email" 
                                            placeholder="E-mail"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                        <input type="text" class="form-control" 
                                            name="telefone" 
                                            data-ng-model="telefone" 
                                            mask="(99) 9999-9999"
                                            placeholder="Telefone com DDD"
                                            >
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                            <input type="text" class="form-control" 
                                                    name="celular" 
                                                    data-ng-model="celular" 
                                                    mask="(99) 9?9999-9999"
                                                    placeholder="Celular com DDD"
                                                    required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12"> 
                                        <br>
                                            <label class="control-label" for="celular">WhatsApp </label>

                                            <label class="radio-inline">
                                                <input type="radio" 
                                                        name="whatsapp" 
                                                        data-ng-model="whatsapp" 
                                                        value="sim" data-ng-checked="true" > 
                                            Sim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" 
                                                        name="whatsapp" 
                                                        data-ng-model="whatsapp" 
                                                        value="nao">
                                            Não
                                            </label>
                                        </div>
                                     </div>
                                    <p class="">Sugestão para programa de governo.</p>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                            <textarea class="form-control" 
                                                    rows="5" 
                                                    name="sugestao"
                                                    data-ng-model="sugestao"
                                                    ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <div class="col-sm-offset-2 col-md-offset-0 col-sm-10 col-md-12">
                                          <button type="submit" 
                                                  class="btn btn-block"
                                                  data-ng-disabled="form.nome.$invalid || 
                                                                    form.email.$invalid ||
                                                                    form.endereco.$invalid ||
                                                                    form.celular.$invalid ||
                                                                    form.whatsapp.$checked" 
                                            >Enviar</button>
                                        </div>
                                    </div>
                            </form>
                        </p>
                        <p class="hidden">mark</p>
                        <div class="padding"></div>
              </div>
            </div>
        </div>
    </div><!-- container -->
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

    <script type="text/javascript" src="./assets/js/vendor.js"></script>

    @include('sweet::alert')  
  </body>
</html>