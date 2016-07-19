<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vc faz SBC</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css" />

  </head>
  <body>

    <section class="Header">
        <div class="container">

            <div class="col-sm-3 col-md-3 col-xs-3 "><div class="Peoples"></div></div>
            <div class="col-sm-6 col-md-6 col-xs-6">
                <p class="vcfaz">faz</p><p class="Barra"></p>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-3">
                <div class="Box">
                    <div class="Tarcisio"></div>
                </div>
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
                    Pra São Bernardo <br>
                    seguir mudando.
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse1" class="panel-collapse collapse"> <!--collapse in -->
                <div class="panel-body">
                    <p>Nos últimos oito anos, experimentamos importantes avanços em todas as áreas, com obras, programas e ações que elevaram São Bernardo à condição de cidade líder no ABC, posição reconhecida inclusive por quem é de fora.</p>
                    <p>A cidade dos batateiros, do automóvel, da Billings, da luta sindical passou a ser também a cidade da Nova Lions, do Hospital de Clínicas Municipal, dos novos conjuntos habitacionais, dos CEUs, do Drenar, do Centro Integrado de Monitoramento, de conquistas que promoveram a inclusão e que tiveram origem na participação cidadã.</p>
                    <p>Participação que se faz presente na decisão dos investimentos prioritários, na definição das estratégias de longo prazo, na construção das políticas, na relação próxima entre quem presta serviços e quem recebe atenção. </p>
                    <p>E queremos ir além, queremos ampliar esse legado, produzir mais participação, investimentos e cuidados com a cidade e sua gente, um processo que, por ser aberto, democrático e inclusivo, precisa da sua crítica, da sua ideia, da sua participação.</p>

              </div>
            </div>
        </div>

        <div class="panel panel-default Red">
            <div class="panel-heading ">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"> 
                    <h4 class="panel-title">
                        Eixos para São Bernardo <br>
                        que cuida da sua gente.
                    </h4>
                    <span class="Line"></span>
                </a>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="Strong">Desenvolvimento humano e inclusão social.</p>
                    <p>
                        Emprestar um olhar diferente na relação com as pessoas dando um passo adiante na implementação de programas e ações de forma a possibilitar mais proximidade, mais cuidados, mais cidadania e mais oportunidades, respeitando as diversidades, as vocações e as necessidades.
                    </p>
                    <p class="Strong">Integração territorial e qualidade de vida urbana.</p>

                    <p>
                        Redimensionar projetos e estratégias fazendo com eles que produzam espaços integrados e coletivos de bem viver, encurtando distâncias, preservando o meio ambiente, estimulando talentos, protegendo a vida, promovendo encontros.
                    </p>
                    <p class="Strong">Planejamento participativo e inovação institucional.</p>
                    <p>
                       Fortalecer os fóruns de participação cidadã, ampliando e qualificando os processos de debate, planejamento, gestão, zeladoria e desenvolvimento de São Bernardo do Campo, pensando a cidade e suas regiões.
                    </p>
                    <p class="Strong">São Bernardo (cidade) do futuro.</p>
                    <p>
                        Combinar base, potencialidades, competências, inovação e arranjos na construção de um modelo de desenvolvimento econômico sustentado que compreenda trabalho, empreendedorismo, inteligência e negócios como partes de um mesmo processo feito de gente.
                    </p>
              </div>
            </div>
        </div>

        <div class="panel panel-default Red">
            <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"> 
                    <h4 class="panel-title">
                        Aqui a participação cidadã <br>
                        é marca e método. <br>
                        <small class="Small">Compartilhe suas ideias</small>
                    </h4>
                    <span class="Line"></span>                  
                </a>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body" data-ng-app="vcFazSbc">
                        <p>A partir dos eixos aqui propostos, deixe sua contribuição, ajude a fazer a cidade que queremos.</p>
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
                                    <p class="Strong">Sugestão para programa de governo.</p>
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