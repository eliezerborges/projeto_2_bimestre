<?php

namespace Todolist\Http\Controllers;

use Illuminate\Http\Request;
use Todolist\Http\Requests;
use Todolist\Http\Controllers\Controller;
use Todolist\Models\Musica;
use Todolist\Models\Banda;
use Todolist\Models\Album;

class MusicaController extends Controller {

    public function listar(Musica $musica) {
        $data['musicas'] = $musica->all();        

        return view('musicas.listar_musicas', $data);
    }

    public function nova() {
        $data['albuns'] = Album::all(['nome','id_album']);
        return view('musicas.nova_musica',$data);
    }

    public function alterar(Musica $musica, $id_musica) {
        $data['albuns'] = Album::all(['nome','id_album']);
        $musica = $musica->find($id_musica);
        if ($musica != null) {
            $data['musica'] = $musica;
            return view('musicas.alterar_musica', $data);
        } else {
            return redirect(url('musica'));
        }
    }

    public function salvar(Request $request, Musica $musica) {
        if ($request->has('id_musica')) {
            $musica = $musica->find($request->get('id_musica'));
            
            if ($musica != null) {
                $musica->update($request->all());
                return redirect('musicas/listar_musicas');
            }
        }
        
        $musica->create($request->all());
        return redirect('musicas/listar_musicas');
    }

    public function excluir(Request $request, Musica $musica, $id_musica = null) {
        $musica = $musica->find($id_musica);
        if ($musica != null) {
            $musica->destroy($musica->id_musica);
            return redirect('musicas/listar_musicas');
        } else {
            return redirect(url('musica'));
        }
    }

}
