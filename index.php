<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>WebQuest USA</title>
    </head>

    <body>
        
        
        <nav>
            <div class="nav-wrapper menu-topo">
                <a href="#!" class="brand-logo center">USA</a>
                <a href="#" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="side-nav fixed tamanho-menu" id="menu">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="imagens/estatua_liberdade.jpg" width="200px">
                            </div>
                            <a href="?p=introducao"><img class="circle" src="imagens/perfil.jpg"></a>
                            <a href="?p=introducao"><span class="white-text name">Colombozinho</span></a>
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
                                    <li><a href="#!">Etapa 1</a></li>
                                    <li><a href="#!">Etapa 2</a></li>
                                </ul>
                                <hr>
                            </div>
                        </li>
                    </ul>
                    <li><a href="?p=recursos">Recursos</a></li>
                    <li><a href="?p=avaliacao">Avaliação</a></li>
                    <li><a href="?p=conclusao">Conclusão</a></li>
                    <li><a href="?p=sobre">Sobre</a></li>
                </ul>
            </div>
        </nav>
        

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

                default:
                    include_once "paginas/inicio.html";
            }
        ?>

        <div class="container rodape">
            <p>Atualizado em 05/2019 - versão 1.0 - Trabalho acadêmico da disciplina de Didática da Computação na UFPR - Setor Palotina.</p>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $( document ).ready(function() {
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>
        