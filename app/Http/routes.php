<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

//Rotas Musicas
$router->get('musicas/listar_musicas', 'MusicaController@listar');
$router->get('musicas/nova_musica', 'MusicaController@nova');
$router->post('musicas/salvar_musica', 'MusicaController@salvar');
$router->get('musicas/alterar_musica/{id_musica}', 'MusicaController@alterar');
$router->get('musicas/excluir_musica/{id_musica}', 'MusicaController@excluir');


//Rotas Albuns
$router->get('albuns/listar_albuns', 'AlbumController@listar');
$router->get('albuns/novo_album', 'AlbumController@nova');
$router->post('albuns/salvar_album', 'AlbumController@salvar');
$router->get('albuns/alterar_album/{id_album}', 'AlbumController@alterar');
$router->get('albuns/excluir_album/{id_album}', 'AlbumController@excluir');

//Rotas Bandas
$router->get('bandas/listar_bandas', 'BandaController@listar');
$router->get('bandas/nova_banda', 'BandaController@nova');
$router->post('bandas/salvar_banda', 'BandaController@salvar');
$router->get('bandas/alterar_banda/{id_banda}', 'BandaController@alterar');
$router->get('bandas/excluir_banda/{id_banda}', 'BandaController@excluir');