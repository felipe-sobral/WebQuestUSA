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
                <a href="#!" class="brand-logo center">EUA</a>
                <a href="#" data-activates="menu" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="side-nav fixed tamanho-menu" id="menu">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img src="imagens/estatua_liberdade.jpg" width="200px">
                            </div>
                            <a href="#!user"><img class="circle" src="http://archives.materializecss.com/0.100.2/images/yuna.jpg"></a>
                            <a href="#!name"><span class="white-text name">Colombozinho</span></a>
                            <a href="#!email"><span class="white-text email">Explorador</span></a>
                        </div>
                    </li>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Tarefas</a></li>
                    <li><a href="#">Processo</a></li>
                    <li><a href="#">Recursos</a></li>
                    <li><a href="#">Avaliação</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </div>
        </nav>
        

        <h1>{CONTEÚDO}</h1>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script>
            $( document ).ready(function() {
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>
        