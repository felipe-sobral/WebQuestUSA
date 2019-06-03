<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>WebQuest USA</title>
    </head>

    <body>
        
        
        <nav>

            <div class="nav-wrapper">
                <a href="#" data-activates="menu" class="button-collapse menu-botao"><i class="material-icons">menu</i></a>
            </div>
            <div>
                <ul class="side-nav fixed tamanho-menu" id="menu">
                    <li>
                        <div class="user-view">
                            <div class="background" style="background-color: #1A1A1A">
                                <!--<img src="imagens/estatua_liberdade.jpg" width="200px">-->
                            </div>
                            <a href="?p=introducao"><img class="circle" src="imagens/perfil.jpg" style="width: 100%; height: 100%;"></a>
                            <a href="?p=introducao"><span class="white-text name">Colombinho</span></a>
                            <a href="?p=introducao"><span class="white-text email">Explorador</span></a>
                        </div>
                    </li>
                    <li><a href="?p=inicio">Início</a></li>
                    <li><a href="?p=introducao">Introdução</a></li>
                    <li><a href="?p=tarefa">Tarefa</a></li>
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header" style="padding-left: 32px">Processos</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="?p=etapa1">Etapa 1</a></li>
                                    <li><a href="?p=etapa2">Etapa 2</a></li>
                                    <li><a href="?p=etapa3">Etapa 3</a></li>
                                    <li><a href="?p=etapa4">Etapa 4</a></li>
                                    <li><a href="?p=etapa5">Etapa 5</a></li>
                                    <li><a href="?p=etapa6">Etapa 6</a></li>
                                    <li><a href="?p=etapa7">Etapa 7</a></li>
                                    <li><a href="?p=etapa8">Etapa 8</a></li>
                                    <li><a href="?p=etapa9">Etapa 9</a></li>
                                </ul>
                                <div class="divider"></div>
                            </div>
                        </li>
                    </ul>
                    <li><a href="?p=recursos">Recursos</a></li>
                    <li><a href="?p=avaliacao">Avaliação</a></li>
                    <li><a href="?p=conclusao">Conclusão</a></li>
                </ul>
            </div>
            
        </nav>
        
        
        <div style="margin-top: 64px">
            <?php

                $pagina = isset($_GET["p"]) ? $_GET["p"] : "unknow";
                
                switch($pagina){
                    case "inicio":
                        include_once "paginas/inicio.html";
                        break;

                    case "introducao":
                        include_once "paginas/introducao.html";
                        break;

                    case "tarefa":
                        include_once "paginas/tarefa.html";
                        break;
                    
                    case "conclusao":
                        include_once "paginas/conclusao.html";
                        break;

                    case "recursos":
                        include_once "paginas/recursos.html";
                        break;

                    case "avaliacao":
                        include_once "paginas/avaliacao.html";
                        break;

                    case "etapa1":
                        include_once "paginas/processos/e1.html";
                        break;

                    case "etapa2":
                        include_once "paginas/processos/e2.html";
                        break;

                    case "etapa3":
                        include_once "paginas/processos/e3.html";
                        break;

                    case "etapa4":
                        include_once "paginas/processos/e4.html";
                        break;

                    case "etapa5":
                        include_once "paginas/processos/e5.html";
                        break;

                    case "etapa6":
                        include_once "paginas/processos/e6.html";
                        break;

                    case "etapa7":
                        include_once "paginas/processos/e7.html";
                        break;

                    case "etapa8":
                        include_once "paginas/processos/e8.html";
                        break;

                    case "etapa9":
                        include_once "paginas/processos/e9.html";
                        break;

                    default:
                        include_once "paginas/inicio.html";
                }
            ?>
        </div>

        <div class="container rodape ">
            <span>Felipe V. Sobral (xfelipesobral@gmail.com) - Luciene Santos (lucienensantos28@gmail.com)</span><br>
            <span>Atualizado em 05/2019 - versão 1.0 - Trabalho acadêmico da disciplina de Didática da Computação na UFPR - Setor Palotina.</span>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $( document ).ready(function() {
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>
        