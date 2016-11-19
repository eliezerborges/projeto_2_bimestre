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
                <a href="<?php echo url('/musicas/listar_musicas'); ?>">
                    Musicas
                </a>
            </li>
            <li>
                <a href="<?php echo url('/albuns/listar_albuns'); ?>">
                    Albuns
                </a>
            </li>
            <li>
                <a href="<?php echo url('/bandas/listar_bandas'); ?>">
                    Bandas
                </a>
            </li>
        </ul>
        @stop
        @yield('menu')
        <hr/>
        <div>
            @yield('conteudo')
        </div>
        <hr/>
    </body>
</html>