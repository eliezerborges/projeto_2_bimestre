<!doctype html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <title>Pessoas</title>
        <style>
            .menu-h li {
                display: inline;
                list-style-type: none;
                padding-right: 20px;
            }
            .footer {
                font-size: 0.8em;
            }
        </style>
    </head>
    <body>
        @section('menu')
        <ul class="menu-h">
            <li>
                <a href="<?php echo url('/'); ?>">
                    Home
                </a>
            </li>
            <li>
                <a href="<?php echo url('/tarefa'); ?>">
                    Pendentes
                </a>
            </li>
            <li>
                <a href="<?php echo url('/tarefa/listar-realizadas'); ?>">
                    Realizadas
                </a>
            </li>
            <li>
                <a href="<?php echo url('/tarefa/nova'); ?>">
                    Nova Tarefa
                </a>
            </li>
        </ul>
        @stop
        @yield('menu')
        <hr/>
        <h1>Minhas Tarefas</h1>
        <hr/>
        <div>
            @yield('conteudo')
        </div>
        <hr/>
    </body>
</html>